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
            'name' => 'Administrator',
            'email' => 'admin@gmail.com',
        'username' => 'admin',
        'password' => Hash::make('rahasia'),
        'profile_pitcure' => 'contoh.png',
        'roles' => 'admin'
        ]);

        User::create([
            'name' => 'Employee Name',
            'email' => 'cashier@gmail.com',
        'username' => 'cashier',
        'password' => Hash::make('cashier2024'),
        'profile_pitcure' => 'cashier.png',
        'roles' => 'cashier'
        ]);
    }
}
