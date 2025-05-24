<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

User::create([
    'name' => 'Admin',
    'email' => 'admin@example.com',
    'password' => Hash::make('password'),
    'role' => 'admin',
]);

User::create([
    'name' => 'Dueño Local',
    'email' => 'dueno@example.com',
    'password' => Hash::make('password'),
    'role' => 'dueno',
]);

User::create([
    'name' => 'Cliente',
    'email' => 'cliente@example.com',
    'password' => Hash::make('password'),
    'role' => 'cliente',
]);

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(10)->create();
    }
}
