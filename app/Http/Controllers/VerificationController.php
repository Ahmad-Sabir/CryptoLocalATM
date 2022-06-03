<?php

namespace App\Http\Controllers;
use App\ShippingVerification;
use App\Verif_step1;
use App\Verif_step2;
use App\Verif_step4;
use App\Verif_step3;
use App\Verif_step5;
use Illuminate\Support\Facades\Session;
use Twilio\Rest\Client;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
        $rec = Verif_step4::all();
        return view('user.verify.verify_step4', compact('rec'));

    }
    public function verificationstep5()
    {
        return view('user.verify.verify_step5');

    }
    public function my_validation_for_sign_in_with_phone($phone,$code)
    {
        if(empty($phone))
        {
            return "Mobile number is required.";
        }
        if (is_numeric($phone)) {  } else { return "Mobile Number is not valid."; }
        if(empty($code))
        {
            return "code is required.";
        }
        $length_code=strlen($code);
        if (is_numeric($code)) {  } else { return "code should be numeric."; }
        if($length_code!=4)
        {
            return "code must be of 4 numbers.";
        }
        return "success";
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function sendCode(Request $request)
     {
            $phone = $request->pnumber;
            $cell = '+'.$phone;
            $code = substr(str_shuffle("0123456789"), 0, 4);
            $result=$this->my_validation_for_sign_in_with_phone($phone,$code);
            if ($result!="success") {
                return response()->json(['status'=>'error','msg'=>$result]);
            }
            $my_count = Verif_step4::where('pnumber',$cell)->first();
            if($my_count){
                $success = DB::table('verif_step4s')->where('pnumber',$cell)->update(['code'=>$code]);
                if($success){
                    $message = "This is your verification code for Verifcation"." ".$code;
                    $this->sendMessage($message, $cell);
                    return view("user.verify.verify_step4" );
                //  return response()->json(['status' => 'success']);
                }else{
                    return response()->json(['status' => 'error', 'msg' => 'There is something error.']);
                }
            }else {
                $success = DB::table('verif_step4s')->insert(['pnumber' => $cell, 'code' => $code,
                    "user_id" => Session::get('user_id', auth()->user()->id )
                ]);
                if ($success) {
                    $message = "This is your verification code for Verification" . " " . $code;
                    $this->sendMessage($message, $cell);
                    return view("user.verify.verify_step4" );
                    //return response()->json(['status' => 'success']);
                } else {
                    return response()->json(['status' => 'error', 'msg' => 'There is something error.']);
                }
            }
     }
    private function sendMessage($message, $recipients)
    {
        $account_sid = getenv("TWILIO_SID");
        $auth_token = getenv("TWILIO_AUTH_TOKEN");
        $twilio_number = getenv("TWILIO_NUMBER");
        $client = new Client($account_sid, $auth_token);
        $client->messages->create($recipients,
        ['from' => $twilio_number, 'body' => $message] );
    }
    public function codeverif(Request $request)
    {
            $phone = $request->pnumber;
            $credentials = [
                'pnumber' => $phone,
                'code'=>$request->code,
            ];
        $code = Verif_step4::where('pnumber',$phone)->where('code',$request->code)->first();
        if ($code !=null){
            return view('user.verify.verify_step5')->with('success','Number verified successfully');
        }
     else {
                return back()->with('error','Invalid verification code');
            }
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
            return redirect()->route('verifystep2')->with('success','Images Sent Successfully');
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
        return redirect()->route('verifystep3')->with('message','Images Sent Successfully');
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
            return redirect()->route('verifystep4')->with('message','Images Sent Successfully');
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
            return redirect()->route('verifystep5')->with('message','Shipping Address Sent Successfully');
        }
    }
}
