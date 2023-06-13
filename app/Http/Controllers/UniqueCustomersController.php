<?php

namespace App\Http\Controllers;

use App\Models\UniqueCustomer;
use Illuminate\Http\Request;

class UniqueCustomersController extends Controller
{
    function show() {
        $data = UniqueCustomer::all();
        return view('unique',['uniques'=>$data]);
    }
}
