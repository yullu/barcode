<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
 //   return view('welcome');
//});
Route::get('/login',[\App\Http\Controllers\LoginController::class,'login'])->name('login');
Route::post('/login',[\App\Http\Controllers\LoginController::class,'store']);
Route::get('/login/logout',[\App\Http\Controllers\LoginController::class,'logout']);

Route::get('/register',[\App\Http\Controllers\RegisterController::class,'index'])->name('register');
Route::post('/register',[\App\Http\Controllers\RegisterController::class,'store']);

Route::get('/',[\App\Http\Controllers\ProductController::class,'index'])->name('product');
Route::get('/product',[\App\Http\Controllers\ProductController::class,'index'])->name('product');
Route::get('/product/create',[\App\Http\Controllers\ProductController::class,'create']);
Route::post('/product',[\App\Http\Controllers\ProductController::class,'store']);
