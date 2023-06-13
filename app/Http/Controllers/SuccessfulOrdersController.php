<?php

namespace App\Http\Controllers;

use App\Models\SuccessfulOrder;
use Illuminate\Http\Request;

class SuccessfulOrdersController extends Controller
{
    function show() {
        $data = SuccessfulOrder::paginate(10);
        return view('successful',['successful'=>$data]);
    }
}
