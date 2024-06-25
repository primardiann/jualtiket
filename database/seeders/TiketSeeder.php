<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tiket;

class TiketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tiket::create([
            'category' => 'Regular',
            'price' => 100000,
            'stock' => 50,
        ]);

        Tiket::create([
            'category' => 'VIP',
            'price' => 200000,
            'stock' => 20,
        ]);

        Tiket::create([
            'category' => 'VVIP',
            'price' => 500000,
            'stock' => 10,
        ]);
    }
}
