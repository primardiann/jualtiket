<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konser extends Model
{
    use HasFactory;
    protected $table = 'konsers';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama_konser',
        'tanggal',
        'harga',
        'waktu',
        'lokasi',
        'nama_artis',
        'deskripsi',
        'foto_konser',
        'tanggal_awal',
        'tanggal_akhir',
        

        // Tambahkan field lain yang ingin Anda mass assignable di sini
    ];

    public static function rules()
    {
        return [
            'nama_konser' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'harga' => 'required|numeric',
            'waktu' => 'required|string|max:255',
            'lokasi' => 'required|string|max:255',
            'nama_artis' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'foto_konser' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'tanggal_awal' => 'required|date',
            'tanggal_akhir' => 'required|date',
            
        ];
    }
}
