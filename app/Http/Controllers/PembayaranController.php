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
        return view('detail_pembayaran', compact('tikets'));
    }
}
