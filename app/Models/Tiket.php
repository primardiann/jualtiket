<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    use HasFactory;

    protected $table = 'tikets';
    protected $fillable = ['category', 'stock', 'price'];

    // public function konser()
    // {
    //     return $this->belongsTo(Konser::class);
    // }
}
