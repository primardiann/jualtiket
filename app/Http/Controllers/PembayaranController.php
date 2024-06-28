<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tiket;

class PembayaranController extends Controller
{
    public function detail()
    {
        $tikets = Tiket::all();
        return view('detail_pembayaran', compact('tikets'));
    }
    
}
