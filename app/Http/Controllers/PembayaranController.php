<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tiket;
use App\Models\Pembayaran;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

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

    public function addToCart(Request $request)
    {
        // Ambil data item yang ditambahkan ke keranjang dari request

        // Simpan ke basis data menggunakan model Cart
        $cartItem = new Cart();
        $cartItem->user_id = auth()->id(); // Misalnya user ID dari pengguna yang sedang login
        $cartItem->category = $request->category; // Ambil category dari request
        $cartItem->quantity = $request->quantity;
        $cartItem->save();

        // Tampilkan konfirmasi atau redirect ke halaman keranjang
    }

    public function cart()
    {
        // Ambil data tiket dari session atau logic lainnya
        $orderDetails = session('orderDetails');

        // Inisialisasi $totalAmount
        $totalAmount = 0;

        // Hitung total amount jika orderDetails tidak kosong
        if (!empty($orderDetails)) {
            $totalAmount = array_sum(array_column($orderDetails, 'total_price'));
        }

        return view('keranjang.index', compact('orderDetails', 'totalAmount'));
    }

    public function showDetailPembayaran()
    {
        $tikets = Tiket::all();
        // Ambil detail order dari session atau database
        $orderDetails = session('orderDetails');
        $totalAmount = array_sum(array_column($orderDetails, 'total_price'));

        return view('detail_pembayaran', compact('tikets', 'orderDetails', 'totalAmount'));
    }

    public function processVirtualAccountPayment(Request $request)
    {
        // Data pembayaran dari form atau session
        $orderDetails = session('orderDetails');
        $totalAmount = array_sum(array_column($orderDetails, 'total_price'));

        // Generate nomor virtual account (contoh sederhana)
        $virtualAccountNumber = 'VA1234567890'; // Anda dapat mengganti dengan logika yang sesuai dengan integrasi Anda

        // Simpan id_pembayaran dan order details ke sesi
        session([
            'orderDetails' => $orderDetails,
            'virtualAccountNumber' => $virtualAccountNumber,
        ]);

        return redirect()->route('payment_success')->with('success', 'Pembayaran berhasil.');
    }

    public function success()
    {
        return view('payment.success'); // Ganti dengan nama view yang sesuai
    }

    public function resi(Request $request)
    {
        $tikets = Tiket::all();
        // Ambil user yang sedang login
        $user = Auth::user();

        // Ambil data tiket dari session atau logic lainnya
        $orderDetails = session('orderDetails');

        // Total harga dari order details
        $totalAmount = array_sum(array_column($orderDetails, 'total_price'));

        return view('resi', compact('tikets', 'user', 'orderDetails', 'totalAmount'));
    }
}
