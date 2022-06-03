<?php

namespace App\Http\Controllers;
use App\Verif_step5;
use App\FeeModel;
use DB;
use Illuminate\Http\Request;

class SendvoucherController extends Controller
{
    public function send_voucher()
    {
        $data = DB::table('verif_step5s')->where('user_id', auth()->user()->id)->first();
        
        $ship = DB::table('fee_models')->where('id', 1)->first();
        // dd($data);
        return view('user.send_voucher',compact('data','ship'));
    }
    public function store_voucher(Request $request){
        // dd($request);
        $user_id =  auth()->user()->id;
        DB::table('voucher_orders')->insert([
            'amount_without_tax' => $request->amount,
            'amount_with_tax' => $request->final_amount,
            'user_id' =>$user_id,
            ]);
            return redirect()->route('user');
    }
    public function reedem_voucher()
    {
        return view('user.reedem_voucher');
    }
    public function reedem_voucher_yes(){
        return view('user.redeme_2nd_step');
    }
}
