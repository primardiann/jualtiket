<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


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

        // Autentikasi pengguna
        if (Auth::attempt($credentials)) {
            // Jika autentikasi berhasil, ambil data user
            $user = Auth::user();

            // Simpan data yang diperlukan ke dalam session
            session(['first_name' => $user->first_name]);
            session(['last_name' => $user->last_name]);
            session(['phone_number' => $user->phone_number]);
        }
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
