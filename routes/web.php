<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pgcontroller;
use App\Http\Controllers\registercn;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [pgcontroller::class, 'welcome'])->name('home');
Route::get('/product', [pgcontroller::class, 'product'])->name('product');
Route::post('/register.store', [registercn::class, 'store'])->name('register.store');
