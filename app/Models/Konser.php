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
    protected $fillable = ['nama_konser', 'tanggal', 'waktu', 'lokasi', 'nama_artis', 'deskripsi', 'foto_konser', 'tanggal_awal', 'tanggal_akhir'];
    
}
