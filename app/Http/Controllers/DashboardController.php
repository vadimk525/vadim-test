<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //Dashboardadm
    public function dashboardadm() {
        return view('dashboardadm');
    }
}
