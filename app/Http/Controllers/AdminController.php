<?php

namespace App\Http\Controllers;

use App\Models\Konser;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $konsers = Konser::all();
        return view('admin_tampilan_awal', compact('konsers'));
    }
}
