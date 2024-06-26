<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showAdminTampilanAwal()
    {
        return view('admin_tampilan_awal');
    }
}
