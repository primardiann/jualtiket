<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriTiketController extends Controller
{
    public function index()
    {
        return view('kategori_tiket');
    }
}
