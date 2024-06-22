<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;
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

        // if ($user->password === $credentials['password']) {
        //     if ($user->role === 'admin') {
        //         return redirect()->route('admin_tampilan_awal');
        //     } else {
        //         return redirect()->route('detail_pembayaran');
        //     }
        // } else {
        //     return redirect()->back()->with('error', 'Email atau password salah.');
        // }
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
