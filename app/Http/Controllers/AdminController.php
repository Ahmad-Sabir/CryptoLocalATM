<?php

namespace App\Http\Controllers;
use App\Http\Controllers\ChatController;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:superadministrator');
    }

    public function index()
    {
        return view('admin.index');
    }
}
