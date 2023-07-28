<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
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
Route::match(['get', 'post'], '/login', [LoginController::class, 'loginForm'])->name('login');
Route::get('/register',[RegisterController::class,'registerForm'])->name('register');
Route::post('/register',[RegisterController::class,'store'])->name('store.register');