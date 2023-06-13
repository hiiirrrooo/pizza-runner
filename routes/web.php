<?php

use App\Http\Controllers\DailySalesController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaCountsController;
use App\Http\Controllers\UniqueCustomersController;
use App\Http\Controllers\SuccessfulOrdersController;
use App\Http\Controllers\CancelledOrdersController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('/submit', [OrderController::class, 'store']);

Route::get('list', [DailySalesController::class, 'show']);

Route::get('pizza', [PizzaCountsController::class, 'show']);

Route::get('unique', [UniqueCustomersController::class, 'show']);

Route::get('successful', [SuccessfulOrdersController::class, 'show']);

Route::get('cancelled', [CancelledOrdersController::class, 'show']);

