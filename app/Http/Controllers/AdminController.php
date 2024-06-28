<?php

namespace App\Http\Controllers;

use App\Models\Konser;
use App\Models\Tiket;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $konsers = Konser::all();
        return view('admin_tampilan_awal', compact('konsers'));
    }

    public function show()
    {
        $konsers = Konser::all();
        $tikets = Tiket::all();
        return view('admin_data_tiket', compact('konsers', 'tikets'));
    }
    
    public function showData()
    {
        return view('data_pembeli');
    }
}
