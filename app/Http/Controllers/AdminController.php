<?php

namespace App\Http\Controllers;

use App\Models\Konser;
use App\Models\User;
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
        // Ambil data dari tabel users dengan kolom yang dibutuhkan
        $users = User::select('id', 'first_name', 'last_name', 'email', 'phone_number')->get();

        // Ambil data dari tabel tickets dengan kolom category
        $tickets = Tiket::select('id', 'category')->get();

        return view('data_pembeli', [
            'users' => $users,
            'tickets' => $tickets,
        ]);
    }

    public function hapusData($id)
    {
        // Logika untuk menghapus data dari database berdasarkan $id
        // Misalnya, menggunakan model User untuk menghapus data berdasarkan ID

        User::where('id', $id)->delete();

        // Redirect kembali ke halaman data-pembeli setelah menghapus
        return redirect()->route('data-pembeli')->with('success', 'Data berhasil dihapus');
    }
}
