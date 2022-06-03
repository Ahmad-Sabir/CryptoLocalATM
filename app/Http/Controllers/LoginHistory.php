<?php

namespace App\Http\Controllers;

use App\LoginHistoryModel;
use Illuminate\Http\Request;

class LoginHistory extends Controller
{
    public function loginhistory(){

        $history = LoginHistoryModel::orderBy('login_status', 'desc')->get();
        return view('admin.login_history.loginhistory', compact('history'));
    }
}
