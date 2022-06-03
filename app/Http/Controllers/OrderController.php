<?php

namespace App\Http\Controllers;

use App\OrderModel;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function order(){
        $data = OrderModel::orderBy('order_id', 'desc')->get();
        return view('admin.orders.orderhome',compact('data'));
    }
    public function Add(Request $req)
    {
        $resto = new OrderModel;
        $resto->order_id = $req->input('order_id');
        $resto->product_name = $req->input('product-name');
        $resto->is_active = $req->input('subscription');
        $resto->save();
        if ($resto){
            return redirect()->route('order.index')->with('message','Ordered successfully');
        }
    }
    public function orderEdit($id){

        $data=OrderModel::where('id',$id)->get()->first();
        return view('admin.orders.edit-order',compact('data'));
    }
    public function updateorder(Request $request){

        $data = OrderModel::find($request->id);
        $data->order_id = $request->order_id;
        $data->product_name = $request->product_name;
        $data->is_active = $request->is_active;
        $data->save();

        if ($data) {
            return redirect()->back()->with('message','updated successfully');
        }
    }


    public function orderDelete($id){
        $data=OrderModel::where('id',$id)->delete();

        if($data){
            return redirect()->back()->with('message','Deleted Successfully');
        }
    }

}
