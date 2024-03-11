<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PelangganController;

Route::get('/app', function () {
    return view('layouts.app');
});

Route::get('/logout', [LoginController::class, 'logout']);
Route::get('/login', [LoginController::class,   'index'])->name("login");
Route::post('/login', [LoginController::class, 'login']);

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [LoginController::class, 'home']);
    Route::get('/home/logout', [LoginController::class, 'login']);
});

Route::get('/registrasi', [RegistrasiController::class, 'buat_akun']);
Route::post('/registrasi', [RegistrasiController::class, 'registrasi']);

Route::get('/home', [KasirController::class, 'tampilan_home']);
Route::post('/home', [KasirController::class, 'tampilan_home']);
Route::get('/tambahproduk', [KasirController::class, 'tambah_produk']);

Route::get('/datapelanggan', [PelangganController::class, 'tampildatapelanggan']) ;
Route::get('/tambahpelanggan', [PelangganController::class, 'tambah_pelanggan']);
Route::get('/datapelanggan/updatepelanggan/{id}', [PelangganController::class, 'updatepelanggan']) ;
Route::post('updatepelanggan/{id}', [PelangganController::class, 'proses_updatepelanggan']) ;
Route::get('/datapelanggan/deletepelanggan/{id}', [PelangganController::class, 'deletepelanggan']) ;
Route::get('/tambahpelanggan', [PelangganController::class, 'pelanggan']) ;
Route::post('/tambahpelanggan', [PelangganController::class, 'tambahpelanggan']) ;

Route::get('/penjualan', [PenjualanController::class, 'penjualan']);
Route::post('/penjualan', [PenjualanController::class, 'store']);
Route::post('/checkout', [PenjualanController::class, 'checkout']);
//Route::get('/detailpenjualan/{id}', [PenjualanController::class, 'prosesdetailpenjualan']);
Route::get('/detailpenjualan/deletepenjualan/{id}', [PenjualanController::class, 'deletepenjualan']) ;
Route::get('/detailpenjualan/{id}', [PenjualanController::class, 'detailpenjualan']);
Route::get('/datapenjualan', [PenjualanController::class, 'tampilpenjualan']);


Route::get('/tampildataproduk', [ProdukController::class, 'tampilproduk']) ;
Route::get('/dataproduk/updateproduk/{id}', [ProdukController::class, 'updateproduk']) ;
Route::post('tampildataproduk/updateproduk/{id}', [ProdukController::class, 'proses_updateproduk']) ;
Route::get('/dataproduk/deleteproduk/{id}', [ProdukController::class, 'deleteproduk']) ;
Route::get('/tambahproduk', [ProdukController::class, 'produk']) ;
Route::post('/tambahproduk', [ProdukController::class, 'tambahproduk']) ;


    