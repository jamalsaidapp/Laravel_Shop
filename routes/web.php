<?php

use Illuminate\Support\Facades\Route;

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

Route::view('/', 'Pages.home');
Route::view('cart', 'Pages.cart');
Route::view('checkout', 'Pages.checkout');
Route::view('success_order', 'Pages.success_order');
Route::get('shop', [\App\Http\Controllers\Frontend\ProductController::class, 'index']);
Route::resource('products', \App\Http\Controllers\Frontend\ProductController::class);
Route::resource('categories', \App\Http\Controllers\Frontend\CategoryController::class);
