<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeskripsiController;
use App\Http\Controllers\KategoriTiketController;
use App\Http\Controllers\KonserController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\TiketController;
use App\Http\Controllers\AdminController as ControllersAdminController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\PembayaranController as ControllersPembayaranController;

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

Route::get('/', function () {
    return view('tampilan_awal');
});

// Route for AdminController
Route::get('/admin/tampilan-awal', [ControllersAdminController::class, 'index'])->name('admin_tampilan_awal');
Route::get('/admin/data', [ControllersAdminController::class, 'show'])->name('admin_data_tiket');

Route::get('/data-pembeli', [ControllersAdminController::class, 'showData'])->name('data-pembeli');
// routes/web.php
Route::get('/detail-pembayaran', [DetailController::class, 'show'])->name('detail_pembayaran');
Route::post('/process-order', [DetailController::class, 'processOrder'])->name('process_order');

// Route Setelah login
Route::get('/detail_pembayaran', [DetailController::class, 'show'])->name('detail');
Route::post('/detail_pembayaran/store', [DetailController::class, 'store'])->name('detail_pembayaran.store');
// Route for PembayaranController Sebelum Login
Route::get('/pembayaran/detail', [ControllersPembayaranController::class, 'detail'])->name('detail_pembayaran');

// Route daftar
Route::get('/sign_up', [SignUpController::class, 'showRegistrationForm'])->name('sign_up');
Route::post('/sign_up', [SignUpController::class, 'register'])->name('sign_up.post');

// Deskripsi
Route::get('deskripsi', [DeskripsiController::class, 'show'])->name('deskripsi');

// Route untuk halaman kategori tiket
// Route::get('/kategori_tiket', [KategoriTiketController::class, 'index'])->name('kategori_tiket');
Route::post('/beli-tiket', [KategoriTiketController::class, 'beliTiket'])->name('beli_tiket');
Route::get('/kategori_tiket', [KategoriTiketController::class, 'show'])->name('kategori.show');
Route::get('/kategori_tiket', [KategoriTiketController::class, 'index'])->name('kategori.index');

//CRUD
Route::get('/konsers/create', [KonserController::class, 'create'])->name('konser.create');
Route::post('/konsers', [KonserController::class, 'store'])->name('konser.store');
Route::get('/konsers', [KonserController::class, 'index'])->name('konser.index');
// Route::get('/admin/{konser}', [KonserController::class, 'show'])->name('konser.show');
Route::get('/konsers/{konser}/edit', [KonserController::class, 'edit'])->name('konser.edit');
Route::put('/konsers/{konser}/update', [KonserController::class, 'update'])->name('konser.update');
Route::delete('/konsers/{konser}', [KonserController::class, 'destroy'])->name('konser.destroy');

Route::get('/tikets', [TiketController::class, 'index'])->name('tikets.index');
Route::get('/tikets/create', [TiketController::class, 'create'])->name('tikets.create');
Route::post('/tikets', [TiketController::class, 'store'])->name('tikets.store');
// Route::get('/tikets/{tiket}', [TiketController::class, 'show'])->name('tikets.show');
Route::get('/tikets/{tiket}/edit', [TiketController::class, 'edit'])->name('tikets.edit');
Route::put('/tikets/{tiket}/update', [TiketController::class, 'update'])->name('tikets.update');
Route::delete('/tikets/{tiket}', [TiketController::class, 'destroy'])->name('tikets.destroy');

// Route::middleware(['auth'])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('detail_pembayaran');
//     })->name('dashboard');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__ . '/auth.php';
