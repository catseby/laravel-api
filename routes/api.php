<?php

use Illuminate\Http\Request;
use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::resource('/customers', CustomerController::class);
Route::get('/customers/{customer}/orders', [CustomerController::class, 'index_orders']);
Route::get('/customers/{customer}/orders/{order}', [CustomerController::class, 'show_orders']);