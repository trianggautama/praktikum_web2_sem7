<?php

use App\Http\Controllers\AutentikasiController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//autentikasi
Route::get('/login', [AutentikasiController::class, 'login'])->name('login');
Route::post('/login', [AutentikasiController::class, 'loginstore'])->name('loginstore');
Route::get('/register', [AutentikasiController::class, 'register'])->name('register');
Route::post('/register', [AutentikasiController::class, 'registerstore'])->name('registerstore');
Route::post('/logout', [AutentikasiController::class, 'logout'])->name('logout');


Route::get('/home/{angka1}/{angka2}', [HomeController::class, 'index'])->name('home');

