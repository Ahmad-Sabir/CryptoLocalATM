<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:user');
    }


    public function index()
    {
        return view('user.dashboard');
    }


}

