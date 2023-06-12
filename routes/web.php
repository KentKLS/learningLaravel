<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use PhpParser\Builder\Param;

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

Route::get('/', [HomeController::class, 'show'])->name('showHome');
Route::get('/product', [ProductController::class, "showProducts"])->name('showProducts');
Route::get('/product/{id}',[ProductController::class, 'showProduct'] )->name('showProduct');
Route::post('/cart',[CartController::class, 'show'] )->name('showCart');

