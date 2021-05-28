<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboardindex(){
        return view('dashboard.index');
    }

    public function dashboardinner(){
        return view('dashboard.inner');
    }

    public function dashboarddetail(){
        return view('dashboard.detail');
    }
}
