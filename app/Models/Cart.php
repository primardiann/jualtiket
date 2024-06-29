<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $table = 'carts';

    public function cart()
    {
        // Ambil data keranjang dari basis data
        $cartItems = Cart::where('user_id', auth()->id())->get();

        // Hitung total harga atau yang lainnya

        return view('keranjang.index', compact('cartItems', 'totalAmount'));
    }
}
