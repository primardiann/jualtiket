<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showDetailPembayaran()
    {
        return view('detail_pembayaran');
    }
}
