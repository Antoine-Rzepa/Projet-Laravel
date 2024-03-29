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


Route::get('/', [\App\Http\Controllers\HomeController::class, 'home']);

Route::get('/product', [\App\Http\Controllers\ProductController::class, 'allProduct']);

Route::get('/product/{id}', [\App\Http\Controllers\ProductController::class, 'product']);

Route::get('/cart', [\App\Http\Controllers\CartController::class, 'cart']);
