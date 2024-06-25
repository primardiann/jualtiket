<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create a default admin user
        $admin = User::create([
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
            'role' => 'admin'
        ]);

        // Create a default user
        $user = User::create([
            'email' => 'pengguna@gmail.com',
            'password' => Hash::make('pengguna'),
            'role' => 'user',
            'first_name' => 'John',
            'last_name' => 'Doe',
            'phone_number' => '0987654321',
            'birthdate' => '1995-06-15'
        ]);
    }
}
