<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tiket;

class PembayaranController extends Controller
{
    public function detail()
    {
        $tikets = Tiket::all();
        return view('kategori_tiket_user', compact('tikets'));
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

        return redirect()->route('detail');
    }

    public function showDetailPembayaran()
    {
        $tikets = Tiket::all();
        // Ambil detail order dari session atau database
        $orderDetails = session('orderDetails');
        $totalAmount = array_sum(array_column($orderDetails, 'total_price'));
        
        return view('detail_pembayaran', compact('tikets','orderDetails', 'totalAmount'));
    }

    public function processVirtualAccountPayment(Request $request)
    {

        // Data pembayaran dari form atau session
        $orderDetails = session('orderDetails');
        $totalAmount = array_sum(array_column($orderDetails, 'total_price'));

        // Generate nomor virtual account (contoh sederhana)
        $virtualAccountNumber = 'VA1234567890'; // Anda dapat mengganti dengan logika yang sesuai dengan integrasi Anda

        // Simpan transaksi pembayaran ke database (simulasi)
        // Anda bisa menggunakan model Transaksi atau tabel yang sesuai di database Anda
        $transaction = [
            'virtual_account' => $virtualAccountNumber,
            'total_amount' => $totalAmount,
            // Tambahkan informasi tambahan yang diperlukan
        ];
        
        return redirect()->route('payment_success')->with('success', 'Pembayaran berhasil.');
    }

    public function success()
    {
        return view('payment.success'); // Ganti dengan nama view yang sesuai
    }
}
