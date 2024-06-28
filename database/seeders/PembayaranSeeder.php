<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pembayaran;

class PembayaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'id_pembayaran' => 'PB2024001',
                'tgl_pembayaran' => now(),
                'metode' => 'Credit Card',
            ],
            [
                'id_pembayaran' => 'PB2024002',
                'tgl_pembayaran' => now(),
                'metode' => 'Virtual Account',
            ],
            // Tambahkan data lain sesuai kebutuhan
        ];

        // Masukkan data ke dalam tabel menggunakan model Pembayaran
        foreach ($data as $item) {
            Pembayaran::create($item);
        }
    }
}
