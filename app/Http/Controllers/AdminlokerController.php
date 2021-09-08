<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminlokerController extends Controller
{
    public function index()
    {
        return view('adminloker.dashboard.dashboard');
    }
}
