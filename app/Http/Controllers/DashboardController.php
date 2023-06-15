<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class DashboardController extends Controller
{
    public function show(){
        return view('dashboard');
    }

    public function showOrders(){
        return view('orders');
    }

    public function showReports(){
        return view('reports');
    }
}
