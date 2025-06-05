<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CategoriaCliente;
use Illuminate\Support\Facades\Hash;

CategoriaCliente::create([
    'descripcion' => '‘Inicial’',
]);

CategoriaCliente::create([
    'descripcion' => 'Medium',
]);

CategoriaCliente::create([
    'descripcion' => 'Premium',
]);

class CategoriaClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CategoriaCliente::factory(10)->create();
    }
}
