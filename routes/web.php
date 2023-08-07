<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\RegisterController;
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
Route::get('/',[HomeController::class,'index'])->name('homePage');
Route::get('/login', [LoginController::class, 'loginForm'])->name('login');
Route::post('/login',[LoginController::class,'postLogin'])->name('postLogin');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');
Route::get('/register',[RegisterController::class,'registerForm'])->name('register');
Route::post('/register',[RegisterController::class,'store'])->name('store.register');
Route::get('/product/{product}',[HomeController::class,'show'])->name('product.detail');

Route::group(['namespace' => 'order.'], function()
{
    Route::get('/order',[OrderController::class,'index'])->name('index');
    Route::post('/order',[OrderController::class,'store'])->name('store');
});