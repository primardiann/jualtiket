<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LoginController::class, 'index']);

Route::get('/sign_up', function () {
    return view('sign_up');
});

Route::get('/hasil_resi', function () {
    return view('resi');
});

Route::get('/kategori', function () {
    return view('kategori_tiket');
});

Route::get('/edit_profil', function () {
    return view('profil_user');
});

Route::get('/history', function () {
    return view('histori');
});

Route::get('/detail', function () {
    return view('detail_pembayaran');
});

Route::get('/home', function () {
    return view('tampilan_awal');
});

Route::get('/deskripsi', function () {
    return view('deskripsi');
});

Route::get('/admin_tambah_konser', function () {
    return view('admin_tambah_konser');
});

Route::get('/admin_profil_pengguna', function () {
    return view('admin_profil_pengguna');
});