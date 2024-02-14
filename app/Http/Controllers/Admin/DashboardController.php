<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //Dashboardadm
    public function dashboardadm() {
        return view('admin.dashboardadm');
    }
}
