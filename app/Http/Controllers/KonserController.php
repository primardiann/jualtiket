<?php

namespace App\Http\Controllers;

use App\Models\Konser;
use Illuminate\Http\Request;

class KonserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch all concerts and return the view with the data
        $konsers = Konser::all();
        return view('admin_tampilan_awal', compact('konsers'));
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
        // Validasi request
        $request->validate([
            'nama_konser' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'harga' => 'required|numeric',
            'waktu' => 'required|string|max:255',
            'lokasi' => 'required|string|max:255',
            'nama_artis' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'foto_konser' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'tanggal_awal' => 'required|date',
            'tanggal_akhir' => 'required|date|after_or_equal:tanggal_awal',
            
        ]);

        // Simpan data konser ke dalam database
        $konser = new Konser();
        $konser->nama_konser = $request->nama_konser;
        $konser->tanggal = $request->tanggal;
        $konser->harga = $request->harga;
        $konser->waktu = $request->waktu;
        $konser->lokasi = $request->lokasi;
        $konser->nama_artis = $request->nama_artis;
        $konser->deskripsi = $request->deskripsi;
        $konser->tanggal_awal = $request->tanggal_awal;
        $konser->tanggal_akhir = $request->tanggal_akhir;




        if ($request->hasFile('foto_konser')) {
            $path = $request->file('foto_konser')->store('public/foto_konser');
            $konser->foto_konser = $path;
        }

        $konser->save();

        // Redirect atau response setelah penyimpanan berhasil
        return redirect()->route('konser.index')->with('success', 'Konser dan kategori tiket berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
{
    $konser = Konser::findOrFail($id); // Mengambil data konser berdasarkan ID
    return view('data_pembeli', compact('konser'));
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Konser $konser)
    {
        return view('admin_edit_tiket', compact('konser'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Konser $konser)
    {
        // Validasi request
        $request->validate([
            'nama_konser' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'harga' => 'required|numeric',
            'waktu' => 'required|string|max:255',
            'lokasi' => 'required|string|max:255',
            'nama_artis' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'foto_konser' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'tanggal_awal' => 'required|date',
            'tanggal_akhir' => 'required|date|after_or_equal:tanggal_awal',
            
        ]);

        // Update data konser
        $konser->nama_konser = $request->nama_konser;
        $konser->tanggal = $request->tanggal;
        $konser->harga = $request->harga;
        $konser->waktu = $request->waktu;
        $konser->lokasi = $request->lokasi;
        $konser->nama_artis = $request->nama_artis;
        $konser->deskripsi = $request->deskripsi;
        $konser->tanggal_awal = $request->tanggal_awal;
        $konser->tanggal_akhir = $request->tanggal_akhir;




        if ($request->hasFile('foto_konser')) {
            $path = $request->file('foto_konser')->store('public/foto_konser');
            $konser->foto_konser = $path;
        }

        $konser->save();

        // Redirect atau response setelah update berhasil
        return redirect()->route('konser.index')->with('success', 'Konser berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Konser $konser)
    {
        $konser->delete();
        return redirect()->route('konser.index')->with('success', 'Konser berhasil dihapus.');
    }
}

