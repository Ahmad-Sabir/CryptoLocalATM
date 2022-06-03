<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class LoginController extends Controller
{
    public function resetPassword(Request $request) {

        if(isset($request['email'])) {

        $user = DB::table('users')->where('email',$request['email'])->first();
        if($user == null){
        return redirect()->back()->with('alert','Invalid Email or Password');
        }
        else {

        $new_pas = rand(100000,999999);
        DB::table('users')->where('email',$request['email'])->update([
        "password" => bcrypt($new_pas)
        ]);

        $name = DB::table('users')->where('email',$request['email'])->pluck('name')->first();
        $email = $request['email'];
        $email_data = array('new_pas' => $new_pas , 'name' => $name);
        $test = Mail::send(['html'=>'auth.email.password-reset-view'], $email_data, function($message) use($email) {
        $message->to($email)->subject('CryptoATM Notification: Password Reset');
        $message->from('info@cryptoatm.com','CryptoATM Password Reset');
        });

        return redirect('login')->with('success','New Password Successfully Sent, Check Mail');
        }
        }
        return redirect()->back()->with('alert','Something Wrong');
    }
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
protected function authenticated(Request $request, $user)
{
  if($user->hasRole('superadministrator')){
      return redirect('/showclient');
  }
  if($user->hasRole('user')){
    return redirect('/user');
}
}
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


}
