<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
use App\Http\Controllers\biodataController;

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



//form login
Route::get('/login', [authController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [authController::class, 'authenticate']);
//form register
Route::get('/register', [authController::class, 'register']);
Route::post('/register', [authController::class, 'daftar']);
//logout akun
Route::get('/logout',[authController::class, 'logout']);

//middleware untuk menjaga jika sudah login bisa masuk dan belum login tidak bisa lihat biodata
Route::middleware(['auth'])->group(function(){
    //biodata
    Route::get('/biodata',[biodataController::class, 'index']);
});



