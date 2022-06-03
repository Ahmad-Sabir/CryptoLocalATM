<?php

namespace App\Http\Controllers;
use App\ClientData;
use App\User;
use Illuminate\Support\Facades\DB;
use App\Verif_step5;
use App\Verif_step1;
use App\Verif_step2;
use App\Verif_step3;
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
