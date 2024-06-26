<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'first_name' => 'John',
                'last_name' => 'Doe',
                'email' => 'john.doe@example.com',
                'phone_number' => '1234567890', // Ganti dengan nomor telepon yang sesuai
                'birthdate' => '1990-01-01',
                'password' => Hash::make('password123'), // Ganti dengan password yang sesuai
                'role' => 'user', // Default role, sesuaikan sesuai kebutuhan
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];

        // Masukkan data pengguna ke dalam tabel 'users'
        foreach ($users as $userData) {
            User::create($userData);
        }

    }
}
