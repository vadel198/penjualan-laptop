<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PembeliController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\auth_controller;

/*
|----------------------------------------------------------------------
| Web Routes
|----------------------------------------------------------------------
| 
| Here is where you can register web routes for your application.
|
*/

// Rute yang memerlukan autentikasi
Route::middleware('auth')->group(function () {
    // Halaman deskripsi utama setelah login
    Route::get('/', [PembeliController::class, 'index'])->name('data_pembeli.index');

    // Resource routes untuk penjualan dan pembeli
    Route::resource('penjualan', PenjualanController::class);
    Route::resource('pembeli', PembeliController::class)->except(['create', 'store']);
   
    Route::get('data_pembeli.index', [PembeliController::class, 'index'])->name('pembeli.index');
    Route::get('penjualan.index', [PenjualanController::class, 'index'])->name('penjualan.index');
});

// Halaman login untuk pengguna yang belum login (guest)
Route::get('/login', function () {
    return view('Auth.Login');
})->middleware('guest')->name('login');

// Rute untuk pembeli tanpa autentikasi

Route::get('/pembeli/transaksi/{id}', [PembeliController::class, 'create'])->name('pembeli.transaksi');
Route::post('/pembeli/store/{id}', [PembeliController::class, 'store'])->name('pembeli.store');

// Rute tambahan untuk melihat daftar pembeli dan transaksi
Route::get('pembeli.index', [PenjualanController::class, 'item'])->name('pembeli.index');
Route::delete('/pembeli/destroy/{id}', [PembeliController::class, 'destroy'])->name('pembeli.destroy');

// Rute login dan logout
Route::post('/login-proses', [auth_controller::class, 'login'])->name('loginproccess');
Route::post('/logout', [auth_controller::class, 'logout'])->name('logout');