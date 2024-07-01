<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Konser;

class HomeController extends Controller
{
    public function index()
    {
        $konsers = Konser::all();
        return view('tampilan_awal', compact('konsers'));
    }
}
