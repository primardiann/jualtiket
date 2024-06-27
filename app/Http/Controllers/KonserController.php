<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKonserRequest;
use App\Models\Konser;
use App\Models\Tiket;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateKonserRequest;
use Illuminate\Support\Facades\Storage;

class KonserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $konsers = Konser::all();
        $tikets = Tiket::all(); // retrieve tikets data here as well

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
        // Validasi request
        // Memeriksa apakah semua field yang diperlukan sudah ada dan sesuai dengan format yang ditentukan
        $validatedData = $request->validate([
            'nama_konser' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'waktu' => 'required|string|max:255',
            'lokasi' => 'required|string|max:255',
            'nama_artis' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'foto_konser' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'tanggal_awal' => 'required|date',
            'tanggal_akhir' => 'required|date|after_or_equal:tanggal_awal',
        ]);

        // dd($validatedData);

        // Upload image
        // Mengambil file dari request dan menyimpannya ke direktori 'public/products' dengan nama yang di-hash
        $image = $request->file('foto_konser');
        $image->storeAs('public/concerts', $image->hashName());

        // Create Konser
        // Membuat entitas Konser baru dan menyimpan data yang divalidasi ke database
        Konser::create([
            'nama_konser' => $validatedData['nama_konser'],
            'tanggal' => $validatedData['tanggal'],
            'waktu' => $validatedData['waktu'],
            'lokasi' => $validatedData['lokasi'],
            'nama_artis' => $validatedData['nama_artis'],
            'deskripsi' => $validatedData['deskripsi'],
            'foto_konser' => $image->hashName(), // Menyimpan nama file gambar yang di-hash
            'tanggal_awal' => $validatedData['tanggal_awal'],
            'tanggal_akhir' => $validatedData['tanggal_akhir'],
        ]);

        // Redirect ke halaman index
        // Mengarahkan pengguna kembali ke halaman index dengan pesan sukses
        return redirect()->route('konser.index')->with('success', 'Konser berhasil disimpan.');
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
    public function edit($id)
    {
        $konser = Konser::findorfail($id); // Ensure you retrieve a single Konser instance
        $tiket = Tiket::where('id', $id)->first(); // Ensure you retrieve a single Tiket instance related to the Konser

        return view('admin_edit_tiket', compact('konser', 'tiket'));
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
            'lokasi' => 'required|string|max:255',
            'nama_artis' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'foto_konser' => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
            'tanggal_awal' => 'required|date',
            'tanggal_akhir' => 'required|date|after_or_equal:tanggal_awal',
        ]);

        // Check if image is uploaded
        if ($request->hasFile('foto_konser')) {
            // Upload new image
            $image = $request->file('foto_konser');
            $image->storeAs('public/concerts', $image->hashName());

            // Delete old image
            if ($konser->foto_konser) {
                Storage::delete('public/concerts/' . $konser->foto_konser);
            }

            // Update Konser with new image
            $konser->foto_konser = $image->hashName();
        }

        // Update Konser with other attributes

        // $konser->update([
        //     'nama_konser' => $request->nama_konser,
        //     'tanggal' => $request->tanggal,
        //     'lokasi' => $request->lokasi,
        //     'nama_artis' => $request->nama_artis,
        //     'deskripsi' => $request->deskripsi,
        //     'tanggal_awal' => $request->tanggal_awal,
        //     'tanggal_akhir' => $request->tanggal_akhir,
        // ]);

        // // Redirect atau response setelah update berhasil
        // return redirect()->route('konser.index')->with('success', 'Konser berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Konser $konser)
    {
        $konser = Konser::findOrFail($konser->id);
        $konser->delete();
        return redirect()->route('konser.index')->with('success', 'Konser berhasil dihapus.');
    }
}
