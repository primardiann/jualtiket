<?php

namespace App\Http\Controllers;

use App\Models\Tiket;
use Illuminate\View\View;
use App\Models\Konser;
use App\Http\Requests\StoreTiketRequest;
use App\Http\Requests\UpdateTiketRequest;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class TiketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tikets = Tiket::all();
        $konsers = Konser::all(); // retrieve konsers data here as well

        return view('admin_data_tiket', compact('konsers', 'tikets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin_tambah_konser');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'category' => 'required',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
        ]);

        // Simpan tiket baru ke dalam database
        Tiket::create($request->all());
        return redirect()->route('tikets.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tiket $tiket)
    {
        return view('data_pembeli', compact('tiket'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tiket $tiket)
    {
        $tiket = Tiket::findorfail($tiket->id);
        // $konser = Konser::all(); // retrieve konsers data here as well

        // dd($tiket);

        return view('admin_edit_tiket', compact('tiket'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTiketRequest $request, Tiket $tiket)
    {

        // Validasi input
        $request->validate([
            'category' => 'required',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
        ]);

        $tiket = Tiket::findorfail($tiket->id);
        $tiket->update($request->all());

        // Simpan perubahan pada tiket ke dalam database
        // $tiket->update($request->all());

        $tiket->update([
            'category' => $request->category,
            'price' => $request->price,
            'stock' => $request->stock,
        ]);

        return redirect()->route('tikets.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tiket $tiket)
    {
        $tiket = Tiket::findOrFail($tiket->id);

        // Hapus tiket dari database
        $tiket->delete();
        return redirect()->route('tikets.index');
    }

    public function calculate(Request $request)
    {
        // Mengambil kuantitas dari form
        $regularQuantity = $request->input('regular_quantity', 1);
        $vipQuantity = $request->input('vip_quantity', 1);

        // Definisikan harga tiket
        $regularPrice = 1000000; // Rp. 1.000.000,-
        $vipPrice = 2000000; // Rp. 2.000.000,-

        // Hitung total harga
        $regularTotal = $regularQuantity * $regularPrice;
        $vipTotal = $vipQuantity * $vipPrice;
        $totalPrice = $regularTotal + $vipTotal;
        $totalQuantity = $regularQuantity + $vipQuantity;

        // Kembalikan hasil ke view
        return view('kategori_tiket', compact('regularQuantity', 'vipQuantity', 'totalPrice', 'totalQuantity', 'regularTotal', 'vipTotal'));
    }
}
