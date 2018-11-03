<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Monitor;

class DashboardController extends Controller
{
    public function index()
    {
        $mon = Monitor::orderBy('created_at','desc')->get();
        return view('admin.dashboard.index',compact('mon'));
    }
}
