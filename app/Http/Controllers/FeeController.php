<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\FeeModel;
use Illuminate\Http\Request;

class FeeController extends Controller
{
    public function edit()
    {
        $datas = DB::select('select * from fee_models');
        //dd($datas);
        return view('admin.fee.editFee', compact('datas'));
    }

    public function Delete($id)
    {
        $data = FeeModel::find($id);
        $data->delete();
        return redirect('fee');
    }

    public  function update(Request $req, $id)
    {
        $resto = FeeModel::find($id);
        $resto->admin_fee=$req->input('admin_fee');
        $resto->ship_fee=$req->input('ship_fee');
        $resto->low_fee=$req->input('low_fee');
        $resto->medium_fee=$req->input('medium_fee');
        $resto->normal_fee=$req->input('normal_fee');
        $resto->high_fee=$req->input('high_fee');
        $resto->maximum_purchase=$req->input('maximum_purchase');
        $resto->minimum_purchase=$req->input('minimum_purchase');

        $resto->save();
        $req->session()->flash('status',' Updated  successfully');
        return redirect('editFee');
    }
}
