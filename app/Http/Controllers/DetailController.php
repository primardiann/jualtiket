<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran;
use App\Models\Tiket;

class DetailController extends Controller
{
    public function show()
    {
        $tikets = Tiket::all(); // Mengambil semua data dari tabel tikets
        return view('detail_pembayaran', compact('tikets'));
    }

    public function processOrder(Request $request)
    {
        $quantities = $request->input('quantity');
        $orderDetails = [];

        foreach ($quantities as $ticketId => $quantity) {
            $ticket = Tiket::find($ticketId);
            $orderDetails[] = [
                'category' => $ticket->category,
                'price' => $ticket->price,
                'quantity' => $quantity,
                'total_price' => $ticket->price * $quantity,
            ];
        }

        session(['orderDetails' => $orderDetails]);

        return redirect()->route('detail_pembayaran');
    }

    public function processVirtualAccountPayment(Request $request)
    {
        // Logika pembayaran menggunakan Virtual Account
        // Contoh:
        // - Generate virtual account number
        // - Kirim instruksi pembayaran
        // - Simpan transaksi ke database
        // - Kirim email atau notifikasi
        // - Redirect ke halaman sukses atau gagal pembayaran

        // Misalnya, Anda ingin langsung redirect ke halaman sukses
        return redirect()->route('payment_success')->with('success', 'Pembayaran berhasil.');
    }
}
