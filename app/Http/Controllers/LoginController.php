<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function show()
    {
        return view('login');
    }

    public function processLogin(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $user = User::where('email', $credentials['email'])->first();
    }
    
    public function detailPembayaran()
    {
        return view('detail_pembayaran');
    }

    public function adminTampilanAwal()
    {
        return view('admin_tampilan_awal');
    }
    

}
