<?php

namespace App\Http\Controllers;
use App\ShippingVerification;
use App\Verif_step1;
use App\Verif_step2;
use App\Verif_step3;
use App\Verif_step5;
use Illuminate\Http\Request;

class VerificationController extends Controller
{
    public function verificationstep1()
    {
        return view('user.verify.verify_step1');
    }
    public function verificationstep2()
    {
        return view('user.verify.verify_step2');

    }
    public function verificationstep3()
    {
        return view('user.verify.verify_step3');
    }
    public function verificationstep4()
    {
        return view('user.verify.verify_step4');

    }
    public function verificationstep5()
    {
        return view('user.verify.verify_step5');

    }
    public function step1_verification(Request $request)
    {
        if ($files = $request->file('front_image')) {
            $front_image = time().'front'.'.'.$request->front_image->getClientOriginalExtension();
            $request->front_image->move('assetes/verification/step1/front/', $front_image);
        }
        if ($files = $request->file('back_image')) {
           $back_image = time().'back'.'.'.$request->back_image->getClientOriginalExtension();
            $request->back_image->move('assetes/verification/step1/back/', $back_image);
        }
        $data = new Verif_step1;
        $data->user_id = $request->input('user_id');
        $data->admin_verif_status = 0;
        $data->front_image = $front_image;
        $data->back_image = $back_image;
         $data->save();
        if ($data){
            return redirect()->route('verifystep2')->with('message','Created successfully');
        }
    }
    public function step2_verification(Request $request)
    {
        if ($files = $request->file('step2_image')) {
            $step2_image = time().'.'.$request->step2_image->getClientOriginalExtension();
            $request->step2_image->move('assetes/verification/step2/', $step2_image);
        }
        $data = new Verif_step2();
        $data->user_id = $request->input('user_id');
        $data->step2_image = $step2_image;
        $data->admin_verif_status = $request->input('admin_verif_status');
        $request->session()->flash('status',' Updated  successfully');
        $data->save();
        return redirect()->route('verifystep3')->with('message','Created successfully');
    }
    public function step3_verification(Request $request)
    {
        if ($files = $request->file('residence')) {
            $residence = time().'.'.$request->residence->getClientOriginalExtension();
            $request->residence->move('assetes/verification/step3/', $residence);
        }
        $data = new Verif_step3();
        $data->user_id = $request->input('user_id');
        $data->residence = $residence;
        $data->admin_verif_status = $request->input('admin_verif_status');
        $data->save();
        if ($data){
            return redirect()->route('verifystep4')->with('message','Created successfully');
        }
    }
    public function step5_verification(Request $request)
    {

        $data = new Verif_step5;
        $data->user_id = $request->input('user_id');
        $data->fname = $request->input('fname');
        $data->dob = $request->input('dob');
        $data->nationality = $request->input('nationality');
        $data->city = $request->input('city');
        $data->zipcode = $request->input('zipcode');
        $data->address = $request->input('address');
        $data->state = $request->input('state');
        $data->political_exposed = $request->input('political_exposed');
        $data->occupation = $request->input('occupation');
        $data->industry = $request->input('industry');
        $data->income = $request->input('income');
        $data->worth = $request->input('worth');
        $data->trade = $request->input('trade');
        $data->activity = $request->input('activity');
        $data->admin_verif_status = 0;

     //$data = $request->all();
     // $data['activity'] = $request->input('activity');
         $data->save();


        if ($data){
            return redirect()->route('verifystep5')->with('message','Created successfully');
        }
    }
}
