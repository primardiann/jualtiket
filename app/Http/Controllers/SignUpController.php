<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SignUpController extends Controller
{
    public function showRegistrationForm()
    {
        return view('sign_up');
    }

    public function register(Request $request)
    {
        $validatedData = $request->validate(
            [
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'phone_number' => 'required|string|between:10,15|unique:users',
                'birthdate' => 'required|date',
                'password' => 'required|string|min:8|confirmed',
            ],
            [
                'email.unique' => 'Email sudah terdaftar.',
                'phone_number.unique' => 'Nomor telepon sudah terdaftar.',
            ],
        );

        // Simpan pengguna baru ke database
        $user = User::create([
            'first_name' => $validatedData['first_name'],
            'last_name' => $validatedData['last_name'],
            'email' => $validatedData['email'],
            'phone_number' => $validatedData['phone_number'],
            'birthdate' => $validatedData['birthdate'],
            'password' => Hash::make($validatedData['password']),
            'role' => 'user', // Default role, change as necessary
        ]);

        //Autentikasi pengguna setelah berhasil mendaftar
        Auth::login($user);

        // Redirect ke halaman detail_pembayaran
        return redirect()->route('login');
    }
}
