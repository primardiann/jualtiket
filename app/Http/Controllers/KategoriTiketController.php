<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tiket;
use App\Http\Requests\UpdateTiketRequest;

class KategoriTiketController extends Controller
{
    public function index()
    {
        // Mengambil semua data Tiket dari database
        $tikets = Tiket::all();

        // Mengirimkan data Tiket ke view 'kategori_tiket'
        return view('kategori_tiket', compact('tikets'));
    }
}
