<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function showprofile()
    {
        return view('user.profile');
    }

}
