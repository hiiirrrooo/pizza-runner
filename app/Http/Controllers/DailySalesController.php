<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DailySale;

class DailySalesController extends Controller
{
    function show() {
        $data = DailySale::all();
        return view('list',['sales'=>$data]);
    }
}
