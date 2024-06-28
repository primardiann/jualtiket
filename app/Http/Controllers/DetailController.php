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
}
