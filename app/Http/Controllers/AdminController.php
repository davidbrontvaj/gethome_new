<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('admin_auth');
    }

    public function showDashboard()
    {
    	return view('admin.dashboard');
    }
}
