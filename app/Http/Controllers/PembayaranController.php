<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tiket;

class PembayaranController extends Controller
{
    public function detail()
    {
        $tikets = Tiket::all();
        // Mengirimkan data Tiket ke view 'kategori_tiket'
        return view('kategori_tiket_user', compact('tikets'));
    }
    
}
