<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MoneyController;
use Illuminate\Support\Facades\Auth;
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



Auth::routes();

Route::get('/home',[HomeController::class,'index'])->name('home');
Route::get('/money/clear',[MoneyController::class,'clear'])->name('clear');

Route::resource('product','ProductController')->middleware('auth');
Route::resource('money','MoneyController')->middleware('auth');
// Route::get('/product', [ProductController::class,'index'])->name('product')->middleware('auth');
// Route::resource('product','ProductController');


Route::get('/', function () {
    return view('welcome');
})->name('welcome');