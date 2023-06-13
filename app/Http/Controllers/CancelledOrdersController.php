<?php

namespace App\Http\Controllers;

use App\Models\CancelledOrder;
use Illuminate\Http\Request;

class CancelledOrdersController extends Controller
{
    function show() {
        $data = CancelledOrder::paginate(10);
        return view('cancelled',['cancelled'=>$data]);
    }
}
