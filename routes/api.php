<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('cart/count', [\App\Http\Controllers\Frontend\CartController::class, 'count'])
    ->name('cart.count');
Route::put('cart/decrease/{rowId}', [\App\Http\Controllers\Frontend\CartController::class, 'decreaseQuantity'])
    ->name('api.cart.decrease');
Route::put('cart/increase/{rowId}', [\App\Http\Controllers\Frontend\CartController::class, 'increaseQuantity'])
    ->name('api.cart.increase');
Route::apiResource('cart', \App\Http\Controllers\Frontend\CartController::class);

Route::apiResource('orders', \App\Http\Controllers\Frontend\OrderConroller::class);
