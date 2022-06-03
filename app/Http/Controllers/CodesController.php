<?php

namespace App\Http\Controllers;
use DB;
use App\CodesData;
use App\Imports\ProjectsImport;
use App\Exports\ProjectExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Laravel\Ui\Presets\React;

class CodesController extends Controller
{
    public function codes(){
        $data = CodesData::orderBy('created_at', 'desc')->get();
        return view('admin.codes.codes-home',compact('data'));
    }

    public function addcodes(){
        return view('admin.codes.add-codes');
    }

    public function createCode(Request $request){

        $code = new CodesData;
        $code->name = $request->input('name');
        $code->voucher = $request->input('voucher');
        $code->qr_code = $request->input('qr_code');


        $code->save();

        return redirect('codes')->with('message', 'Code Created Successfully');
    }

    public function editCode($id){
        $data = CodesData::find($id);
        return view('admin.codes.edit-code',compact('data'));
    }

    public function updateCode(Request $request, $id){

        $code = CodesData::find($id);
        $code->name = $request->input('name');
        $code->voucher = $request->input('voucher');
        $code->qr_code = $request->input('qr_code');
        $code->save();

        return redirect('codes')->with('message', 'Code Updated Successfully');
    }

    public function deleteCode($id){
        $code = CodesData::find($id);
        $code->delete();

        return redirect('codes')->with('message', 'Code Deleted Successfully');

    }
    public function addCSVfile(Request $request){


        $file=$request->file('file')->store('import');
        //Excel::import(new ProjectsImport, request()->file('file'));
        (new ProjectsImport)->import($file);

        return redirect('codes')->with('message', 'File imported Successfully');
    }
    public function export()
    {
        return Excel::download(new ProjectExport, 'Demo.xlsx');
    }
}
