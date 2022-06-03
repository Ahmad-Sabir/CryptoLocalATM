<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ VocherModel;
use App\Verif_step5;
use DB;
class VocherController extends Controller
{
    //
    public function vocher(){

        $data =VocherModel::orderBy('vocher_id', 'desc')->get();
        return view('admin.vocher_mange.vocher');
    }
    public function vocherhome()
    {
        $data1 = VocherModel::get();
        $area=  Verif_step5::get();
        return view('admin.vocher_mange.vocherhome', compact('data1','area'));
    }
    public function Addvocher(Request $req)
    {
        $resto = new VocherModel;
        $resto->vocher_id = $req->input('vocher_id');
        $resto->client_address = $req->input('client_address');
        $resto->shipping_amount = $req->input('shipping_amount');
        $resto->created_date = $req->input('created_date');
        $resto->experir_date = $req->input('experir_date');
        $resto->using_date = $req->input('using_date');

        $resto->save();
        if ($resto){
            return redirect()->back()->with('message',' successfully');
       }
    }
    public function Delete($id){
        $data=VocherModel::where('id',$id)->delete();

        if($data){
            return redirect()->back()->with('message','Deleted Successfully');
        }
    }
}
