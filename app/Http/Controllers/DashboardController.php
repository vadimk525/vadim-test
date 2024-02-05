<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //Dashboard
    public function test() {
        dd("test!!!");
        // return view('admin.dashboard');
    }

    public function dashboard111() {
        dd("test");
        // return view('admin.dashboard');
    }
}
