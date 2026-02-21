<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
        'name' => 'Admin',
        'email' => 'admin@email.com',
        'password' => Hash::make('admin123'),
        'role' => 'admin'
    ]);

    User::create([
        'name' => 'Koirul',
        'email' => 'koirul@email.com',
        'password' => Hash::make('koirul123'),
        'role' => 'user'
    ]);
    }
}
