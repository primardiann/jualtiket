<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DeskripsiController;
use App\Http\Controllers\KategoriTiketController;
use App\Http\Middleware\Authenticate;
use App\Http\Controllers\DetailPembayaranController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\SignUpController;

Route::get('/', function () {
    return view('tampilan_awal');
});

// Route login
Route::get('/login', [LoginController::class, 'show'])->name('login.show');
Route::post('/login', [LoginController::class, 'processLogin'])->name('login.process');
Route::get('/detail_pembayaran', [LoginController::class, 'detailPembayaran'])->name('detail_pembayaran')->middleware('auth');
Route::get('/admin', [LoginController::class, 'adminTampilanAwal'])->name('admin_tampilan_awal');

// Route daftar
Route::get('/sign_up', [SignUpController::class, 'showRegistrationForm'])->name('sign_up');
Route::post('/sign_up', [SignUpController::class, 'register'])->name('sign_up.post');

// Route Pengguna Setelah Login
// Deskripsi
Route::get('deskripsi', [DeskripsiController::class, 'show'])->name('deskripsi');

// Route untuk halaman kategori tiket
Route::get('/kategori_tiket', [KategoriTiketController::class, 'index'])->name('kategori_tiket');


