<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DeskripsiController;
use App\Http\Controllers\KategoriTiketController;
use App\Http\Controllers\KonserController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\TiketController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return view('tampilan_awal');
});


// // Route login
Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::post('/login', [LoginController::class, 'processLogin'])->name('login');

// Route untuk form login
Route::get('/login', [AuthenticatedSessionController::class, 'create'])
    ->middleware('guest')
    ->name('login');

// Route untuk proses login
Route::post('/login', [AuthenticatedSessionController::class, 'store'])
    ->middleware('guest');

// Route untuk logout
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

    
// Route for AdminController
Route::get('/admin/tampilan-awal', 'AdminController@index')->name('admin_tampilan_awal');

// Route for PembayaranController
Route::get('/pembayaran/detail', 'PembayaranController@detail')->name('detail_pembayaran');

// Route daftar
Route::get('/sign_up', [SignUpController::class, 'showRegistrationForm'])->name('sign_up');
Route::post('/sign_up', [SignUpController::class, 'register'])->name('sign_up.post');
Route::get('/register', [SignUpController::class, 'showRegistrationForm'])
    ->middleware('guest')
    ->name('register');

Route::post('/register', [SignUpController::class, 'register'])
    ->middleware('guest');

// Route Pengguna Setelah Login
// Deskripsi
Route::get('deskripsi', [DeskripsiController::class, 'show'])->name('deskripsi');

// Route untuk halaman kategori tiket
Route::get('/kategori_tiket', [KategoriTiketController::class, 'index'])->name('kategori_tiket');

Route::get('/kategori-tiket', [KategoriTiketController::class, 'index'])->name('kategori_tiket');
Route::post('/beli-tiket', [KategoriTiketController::class, 'beliTiket'])->name('beli_tiket');

//Admin
// routes/web.php



Route::get('/admin_home', [KonserController::class, 'index'])->name('index');

//CRUD
Route::get('/admin/tambah-konser', [KonserController::class, 'create'])->name('konser.create');
Route::post('/admin/store-konser', [KonserController::class, 'store'])->name('konser.store');
Route::get('/admin', [KonserController::class, 'index'])->name('konser.index');
Route::get('/admin/{konser}', [KonserController::class, 'show'])->name('konser.show');
Route::get('/admin/{konser}/edit', [KonserController::class, 'edit'])->name('konser.edit');
Route::put('/admin/{konser}', [KonserController::class, 'update'])->name('konser.update');
Route::delete('/admin/{konser}', [KonserController::class, 'destroy'])->name('konser.destroy');
Route::resource('konser', KonserController::class);


Route::get('/admin_edit', [TiketController::class, 'index'])->name('index');

Route::get('/tikets', [TiketController::class, 'index'])->name('tikets.index');
Route::get('/tikets/create', [TiketController::class, 'create'])->name('tikets.create');
Route::post('/tikets', [TiketController::class, 'store'])->name('tikets.store');
Route::get('/tikets/{tiket}', [TiketController::class, 'show'])->name('tikets.show');
Route::get('/tikets/{tiket}/edit', [TiketController::class, 'edit'])->name('tikets.edit');
Route::put('/tikets/{tiket}', [TiketController::class, 'update'])->name('tikets.update');
Route::delete('/tikets/{tiket}', [TiketController::class, 'destroy'])->name('tikets.destroy');
Route::post('/calculate', [TiketController::class, 'calculate'])->name('tickets.calculate');

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

require __DIR__.'/auth.php';
