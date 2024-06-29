<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Konser;

class DeskripsiController extends Controller
{
    
    public function show(Konser $konser)
    {
        $konser = Konser::findorfail($konser->id);
        // Menggunakan model binding, $konser sudah berisi instance Konser yang sesuai dengan {konser} dari URL
        return view('deskripsi', compact('konser'));
    }
}
