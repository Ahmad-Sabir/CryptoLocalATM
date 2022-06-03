<?php

namespace App\Http\Controllers;
use App\ClientData;
use App\User;
use Illuminate\Support\Facades\DB;
use App\Verif_step5;
use App\Verif_step1;
use App\Verif_step2;
use App\Verif_step3;
use App\Verif_step4;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ClientDataController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:superadministrator');
    }
    public function showclient(){
        $data = User::all()->except(Auth::id());

        return view('admin.client.client-home',compact('data'));
    }
    public function clientEdit($id){
        $id = $id;

        $data=Verif_step5::where('user_id',$id)->get()->first();
        $step1=Verif_step1::where('user_id',$id)->get()->first();
        $step2=Verif_step2::where('user_id',$id)->get()->first();
        $step3=Verif_step3::where('user_id',$id)->get()->first();
        return view('admin.client.edit-client',compact('data','step1','step2','step3','id'));
    }
    public function createClient(Request $request){
        if ($request->hasFile('client_image_id')) {
            $image = $request->file('client_image_id');
            $imageName = time() . "-" .$image->extension();
            $imagePath = public_path() . 'black/img/';
            $image->move($imagePath, $imageName);
            $imageDbPath = $imageName;
        }
        $data=User::create([
            'name'=>$request['name']??'',
            'lname'=>$request['lname']??'',
            'email'=>$request['email']??'',
            'password'=> bcrypt($request['password']??''),
            'country'=>$request['country']??'',
            'client_image_id'=>$imageDbPath??'',
        ]);

        if ($data){
            return redirect()->route('showclient')->with('message','Created successfully');
        }
    }
    public function update_ship_record(Request $request){

    $data=Verif_step5::where('user_id',$request->user_id)->get();

        if ($files = $request->file('front_image')) {
            $front_image = time().'front'.'.'.$request->front_image->getClientOriginalExtension();
            $request->front_image->move('assetes/verification/step1/front/', $front_image);
        }
        if ($files = $request->file('back_image')) {
        $back_image = time().'back'.'.'.$request->back_image->getClientOriginalExtension();
        $request->back_image->move('assetes/verification/step1/back/', $back_image);
        }
        $ship_step1 =  Verif_step1::where('user_id', $request->user_id)->first();
        $ship_step1->front_image = $front_image;
        $ship_step1->back_image = $back_image;
      //  $ship_step1->user_id = $request->input('user_id');
        $ship_step1->admin_verif_status = 0;
        $ship_step1->save();

        if ($files = $request->file('step2_image')) {
            $step2_image = time().'.'.$request->step2_image->getClientOriginalExtension();
            $request->step2_image->move('assetes/verification/step2/', $step2_image);
        }
        $step2 = Verif_step2:: where('user_id', $request->user_id)->first();
        //$step2->user_id = $request->input('user_id');
        $step2->step2_image = $step2_image;
        $step2->admin_verif_status=0;
        $step2->save();

  if ($files = $request->file('residence')) {
            $residence = time().'.'.$request->residence->getClientOriginalExtension();
            $request->residence->move('assetes/verification/step3/', $residence);
        }
        $data = Verif_step3:: where('user_id', $request->user_id)->first();
       // $data->user_id = $request->input('user_id');
        $data->residence = $residence;
        $data->admin_verif_status = 0;
        $data->save();

        $ship_detail = Verif_step5::where('user_id', $request->user_id)->first();
        $ship_detail->fname = $request->input('fname');
        $ship_detail->dob = $request->input('dob');
        $ship_detail->nationality = $request->input('nationality');
        $ship_detail->city = $request->input('city');
        $ship_detail->zipcode = $request->input('zipcode');
        $ship_detail->address = $request->input('address');
        $ship_detail->state = $request->input('state');
        $ship_detail->political_exposed = $request->input('political_exposed');
        $ship_detail->occupation = $request->input('occupation');
        $ship_detail->industry = $request->input('industry');
        $ship_detail->income = $request->input('income');
        $ship_detail->worth = $request->input('worth');
        $ship_detail->trade = $request->input('trade');
        $ship_detail->activity = $request->input('activity');
        $ship_detail->income = $request->input('income');

        $ship_detail->save();



        return redirect('showclient')->with('message', 'Shipment details Updated');
    }
    public function updateVerif(Request $request){

        $approve = Verif_step1::find($request->id);
        $approve->admin_verif_status = $request->input('admin_verif_status');
        $approve->save();
        // $approve = Verif_step2::find($request->id);
        // $approve->admin_verif_status = 1;
        // $approve->save();
        // $approve = Verif_step3::find($request->id);
        // $approve->admin_verif_status = 1;
        // $approve->save();
        // $approve = Verif_step5::find($request->id);
        // $approve->admin_verif_status = 1;
        // $approve->save();

        // if ($approve) {
        //     return redirect()->back()->with('message','updated successfully');
        // }
    }
    public function addClient(){
        return view('admin.client.add-client');
    }
    public function clientDelete($id){
        $data=User::where('id',$id)->delete();

        if($data){
            return redirect()->back()->with('message','Deleted Successfully');
        }
    }

}
