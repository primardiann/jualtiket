<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran;

class DetailController extends Controller
{
    /**
     * Tampilkan halaman detail pembayaran.
     *
     * @return \Illuminate\View\View
     */
    public function show()
    {
        $pembayarans = Pembayaran::orderBy('tgl_pembayaran', 'desc')->get();

        // Tampilkan view 'detail_pembayaran' dengan data pembayaran
        return view('detail_pembayaran', compact('pembayarans'));
    }


    /**
     * Simpan pembayaran baru.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_pembayaran' => 'required|unique:pembayarans',
            'tgl_pembayaran' => 'required|date',
            'metode' => 'required',
        ]);

        Pembayaran::create($request->all());

        return redirect()->route('detail')
            ->with('success', 'Pembayaran berhasil ditambahkan.');
    }
}
