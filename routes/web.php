<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


//  Route ::redirect('/','/en');
//  Route::group(['prefix' => '{language }'], function () {


Route::get('/', function () {
    return view('welcome');
});
Route::get('/contact-form', [CaptchaServiceController::class, 'index']);
Route::post('/captcha-validation', [CaptchaServiceController::class, 'capthcaFormValidate']);
Route::get('/reload-captcha', [CaptchaServiceController::class, 'reloadCaptcha']);


Route::group(['prefix'=>'2fa'], function(){
    Route::get('/','LoginSecurityController@show2faForm');
    Route::post('/generateSecret','LoginSecurityController@generate2faSecret')->name('generate2faSecret');
    Route::post('/enable2fa','LoginSecurityController@enable2fa')->name('enable2fa');
    Route::post('/disable2fa','LoginSecurityController@disable2fa')->name('disable2fa');

    // 2fa middleware
    Route::post('/2faVerify', function () {
        return redirect(URL()->previous());
    })->name('2faVerify')->middleware('2fa');
});

Route::get('/2fa/enable', 'LoginSecurityController@enableTwoFactor');
Route::post('/2fa/validate', 'LoginSecurityController@enableTwoFactorvalidate')->name('validate');
Route::get('/2fa/disable', 'LoginSecurityController@remove2fa');
Route::get('/2fa/disable/{user_id}', 'LoginSecurityController@remove2fa');
Route::post('/2faVerify', function () {
        // return redirect(URL()->previous());
         $user_id = auth()->user()->id;
         $role = DB::table('role_user')->where('user_id' , $user_id)->pluck('role_id')->first();
         if($role == 1){
         
             return redirect('admin');
         }
         else{
             return redirect('user');
         }
         
    })->name('2faVerify')->middleware('2fa');
    
    
    Route::get('/test_middleware', function () {
    return "2FA middleware work!";
})->middleware(['auth', '2fa']);

Auth::routes();
// });
Route::group(['middleware' => 'auth'], function () {

    //dashboard
Route::get('/user', 'UserController@index')->name('user')->middleware(['auth','2fa']);
Route::post('reset-password','LoginController@resetPassword')->name('reset-password')->middleware('2fa');

//verification

Route::get('verifystep1', 'VerificationController@verificationstep1')->name('verifystep1')->middleware('2fa');
Route::get('verifystep2', 'VerificationController@verificationstep2')->name('verifystep2')->middleware('2fa');
Route::get('verifystep3', 'VerificationController@verificationstep3')->name('verifystep3')->middleware('2fa');
Route::get('verifystep4', 'VerificationController@verificationstep4')->name('verifystep4')->middleware('2fa');
Route::get('verifystep5', 'VerificationController@verificationstep5')->name('verifystep5')->middleware('2fa');
Route::post('verify', 'VerificationController@step1_verification')->name('verify')->middleware('2fa');
Route::post('saveselfie', 'VerificationController@step2_verification')->name('saveselfie')->middleware('2fa');
Route::post('saveresidence', 'VerificationController@step3_verification')->name('saveresidence')->middleware('2fa');
Route::post('shipverify', 'VerificationController@step5_verification')->name('shipverify')->middleware('2fa');
Route::post('sendCode', 'VerificationController@sendCode')->name('sendCode')->middleware('2fa');
Route::post('codeverif', 'VerificationController@codeverif')->name('codeverif')->middleware('2fa');

// send voucher
Route::post('store_voucher', 'SendvoucherController@store_voucher')->name('store_voucher')->middleware('2fa');

//sidebar
Route::get('purchase_order', 'SupportTicket@purchase_order')->name('purchase_order')->middleware('2fa');

Route::get('my_wallet', 'MywalletController@my_wallet')->name('my_wallet')->middleware('2fa');
Route::get('add_wallet', 'MywalletController@add_wallet')->name('add_wallet')->middleware('2fa');
Route::get('send_voucher', 'SendvoucherController@send_voucher')->name('send_voucher')->middleware('2fa');
Route::get('reedem_voucher', 'SendvoucherController@reedem_voucher')->name('reedem_voucher')->middleware('2fa');
Route::get('reedem_voucher_yes', 'SendvoucherController@reedem_voucher_yes')->name('reedem_voucher_yes')->middleware('2fa');

Route::get('setting', 'SettingController@setting')->name('setting')->middleware('2fa');
Route::get('add_ticket', 'SupportTicket@add_ticket')->name('add_ticket')->middleware('2fa');
Route::get('support_ticket', 'SupportTicket@support_ticket')->name('support_ticket')->middleware('2fa');
Route::get('ticket_view/{ticket_no}', 'SupportTicket@ticket_view')->name('ticket_view')->middleware('2fa');
Route::post('submitticket','SupportTicket@submitticket')->middleware('2fa');
});

//admin

Route::group(['middleware' => 'auth'], function () {

    Route::get('/admin', 'AdminController@index')->name('admin')->middleware('2fa');
    

    //client controller
    Route::get('showclient','ClientDataController@showclient')->name('showclient')->middleware('2fa');
    Route::get('user-status/{id}','ClientDataController@clientEdit')->name('userStatus')->middleware('2fa');
    Route::get('add-client','ClientDataController@addClient')->name('add-client')->middleware('2fa');
    Route::post('create-client','ClientDataController@createClient')->name('createClient')->middleware('2fa');
    Route::post('updateVerif/{id}','ClientDataController@updateVerif')->name('updateVerif')->middleware('2fa');
    Route::get('client-delete/{id}','ClientDataController@clientDelete')->name('clientDelete')->middleware('2fa');


// CodesController
    Route::get('codes','CodesController@codes')->name('code.index')->middleware('2fa');
    Route::get('add-code','CodesController@addcodes')->name('addCode')->middleware('2fa');
    Route::post('create-code','CodesController@createCode')->name('createCode')->middleware('2fa');
    Route::get('edit-code/{id}','CodesController@editCode')->name('editCode')->middleware('2fa');
    Route::post('update-code/{id}','CodesController@updateCode')->name('updateCode')->middleware('2fa');
    Route::get('delete-code/{id}','CodesController@deleteCode')->name('deleteCode')->middleware('2fa');
    Route::post('create-csv','CodesController@addCSVfile')->name('addCSVfile')->middleware('2fa');
    Route::get('export', 'CodesController@export')->name('export')->middleware('2fa');

    //Add Wallet Controller

    Route::get('wallet.index','UserWalletController@wallet')->name('wallet.index')->middleware('2fa');
    Route::get('/wallet','UserWalletController@wallethome')->name('wallet')->middleware('2fa');
    Route::post('/wallet','UserWalletController@Add')->name('wallet')->middleware('2fa');
    Route::get('editwallet/{id}', 'UserWalletController@edit')->middleware('2fa');
    Route::post('updatewallet/{id}', 'UserWalletController@update')->name('updatewallet')->middleware('2fa');
    Route::get('deletewallet/{id}','UserWalletController@delete')->name('Deletewallet')->middleware('2fa');

    // Feee Controller
    Route::get('editFee', 'FeeController@edit')->name('editFee')->middleware('2fa');
    Route::post('update/{id}', 'FeeController@update')->name('update')->middleware('2fa');
    Route::get('delete/{id}','FeeController@Delete')->name('Delete')->middleware('2fa');



//Order controller

    Route::get('order','OrderController@order')->name('order.index')->middleware('2fa');
    Route::post('order','OrderController@Add')->name('createorder')->middleware('2fa');
    Route::view('addorder','admin.orders.addorder')->middleware('2fa');
    Route::get('order-edit/{id}','OrderController@orderEdit')->name('orderEdit')->middleware('2fa');
    Route::post('update-order/{id}','OrderController@updateorder')->name('updateorder')->middleware('2fa');
    Route::get('order-delete/{id}','OrderController@orderDelete')->name('orderDelete')->middleware('2fa');

// Chat Controllers
Route::get('chats','ChatController@chats')->name('chat.index')->middleware('2fa');
Route::get('showChat/{ticket_no}','ChatController@showChat')->name('chat.show')->middleware('2fa');
Route::post('/adminReply','ChatController@adminReply')->middleware('2fa');

    //Login History
Route::get('loginhistory','LoginHistory@loginhistory')->name('login.index')->middleware('2fa');


route::get('vocher.index','vochercontroller@vocher')->name('vocher.index')->middleware('2fa');
Route::get('vocherhome','VocherController@vocherhome')->name('vocherhome')->middleware('2fa');
Route::post('Addvocher','VocherController@Addvocher')->name('Addvocher')->middleware('2fa');
Route::get('delete/{id}','VocherController@Delete')->name('Delete')->middleware('2fa');

});

