<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'nom' => 'Admin',
            'prenom' => 'Principal',
            'phone' => '1234567890',
            'role' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('tayssir123'),
        ]);
    }
}
