<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrasiController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/logout', [LoginController::class, 'logout']);
Route::get('/login', [LoginController::class,   'index'])->name("login");
Route::post('/login', [LoginController::class, 'login']);
Route::get('/registrasi', [RegistrasiController::class, 'buat_akun']);
Route::post('/registrasi', [RegistrasiController::class, 'registrasi']);