<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MywalletController extends Controller
{
    public function my_wallet()
    {
        return view('user.wallethome');
    }
    public function add_wallet()
    {
        return view('user.add_wallet');
    }
}
