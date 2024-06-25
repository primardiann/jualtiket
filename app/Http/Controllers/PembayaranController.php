<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function detail()
    {
        return view('detail_pembayaran'); // Return a valid view
    }
}
