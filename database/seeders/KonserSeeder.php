<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Konser;

class KonserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Konser::create([
            'nama_konser' => 'Konser Daniel',
            'tanggal' => now()->addDays(7),
            'waktu' => '19:00',
            'lokasi' => 'Gedung Utama Polibatam',
            'nama_artis' => 'Daniel Caesar',
            'deskripsi' => 'Konser daniel adalah konser besar tahun ini.',
            'foto_konser' => 'daniel.jpg',
            'tanggal_awal' => now()->addDays(3),
            'tanggal_akhir' => now()->addDays(10),
        ]);

        Konser::create([
            'nama_konser' => 'Konser Taylor',
            'tanggal' => now()->addDays(7),
            'waktu' => '19:45',
            'lokasi' => 'Gedung Utama Polibatam',
            'nama_artis' => 'Taylor Swift',
            'deskripsi' => 'Konser swift adalah konser besar tahun ini.',
            'foto_konser' => 'taylor.jpg',
            'tanggal_awal' => now()->addDays(3),
            'tanggal_akhir' => now()->addDays(10),
        ]);
    }
}
