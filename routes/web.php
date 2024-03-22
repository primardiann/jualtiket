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

Route::get('/Edit_profil', function () {
    return view('profil_user');
});
