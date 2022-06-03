<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserWalletmodel;
use App\crypto_currenciesModel;
use DB;

class UserWalletController extends Controller
{
    public function wallet()
    { $data = crypto_currenciesModel::get();

        return view('admin.wallet.add_Wallet' ,compact('data'));
    }
    public function wallethome()
    {
        $data = UserWalletmodel::get();

        return view('admin.wallet.wallethome' ,compact('data'));
    }
    public function Add(Request $req)
    {
        if ($files = $req->file('image')) {
            $image = time().'.'.$req->image->getClientOriginalExtension();
            $req->image->move('assetes/wallet/', $image);
            }
        $resto = new UserWalletmodel();
        $resto->name = $req->input('name');
        $resto->currency= $req->input('currency');
        $resto->image = $image;

        $resto->save();
        $req->session()->flash('status', 'Wallet added: successfully');
        return redirect('wallet.index');
    }
    public function Delete($id)
    {
        $data =  UserWalletmodel::find($id);
        $data->delete();
        return redirect('/wallet');


    }
    public function edit($id)
    {

        $data = crypto_currenciesModel::get();
        $data1=UserWalletmodel::find($id)->first();
        return view('admin.wallet.editwallet', compact('data', 'data1'));
    }
    public function update(Request $req, $id)
    {

         if ($files = $req->file('image')) {
        $image = time().'.'.$req->image->getClientOriginalExtension();
        $req->image->move('assetes/wallet/', $image);
        }

        $data1 = UserWalletmodel::find($id);
        $data1->name=$req->input('name');
        $data1->currency=$req->input('currency');
        $data1->image = $image;


        $data1->save();
        $req->session()->flash('status',' Updated  successfully');
        return redirect('/wallet');
    }
}
