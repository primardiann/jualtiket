<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/', function () {
return view('welcome');
});

//Route::get('/', [HomeController::class, 'index']);
//Route::get('/contact', [HomeController::class, 'contact']);

// Route::get('/welcome', function () {
//    return view ('welcome');
// }) ;

// Route::get('/user/{id}', function ($id) {
//    return 'User dengan ID ' . $id;
// }) ;

//Route::prefix('admin')->group(function (){
//    Route::get('/dashboard', function (){
//        return 'Admin Dashboard';
//    });

//   Route::get('/users', function (){
//        return 'Admin Users';
//    });

// });

Route::get('/listbarang', function () {
    return view('list_barang');
});


// Route::get('/listbarang/{id}/{nama}', [\App\Http\Controllers\ListBarangController::class, 'tampilkan']);

// Route::get('/listtiket/{id}/{kelas}', [\App\Http\Controllers\ListTiketController::class, 'tampilkan']);  

// Route::get('/listtiket/{id}/{kelas}' ,  function($id, $kelas){
// return view('list_tiket', compact('id', 'kelas'));
// });


// Route::get('/listkategori/{id}/{nama}/{harga}' ,  function($id, $nama, $harga){
//        return view('list_kategori', compact('id', 'nama' , 'harga' , ));
// });

// Route::get('/listkategori/{id}/{nama}/{harga}', [\App\Http\Controllers\ListKategoriController::class, 'tampilkan']); 


Route::get('/', function () {
    return view('login');
});


Route::get('/sign_up', function () {
    return view('sign_up');
});


