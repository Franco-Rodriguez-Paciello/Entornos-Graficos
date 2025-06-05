<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Rubro;
use Illuminate\Support\Facades\Hash;

Rubro::create([
    'descripcion' => 'Tecnología',
]);

Rubro::create([
    'descripcion' => 'Agro',
]);

Rubro::create([
    'descripcion' => 'Construcción',
]);

class RubroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Rubro::factory(1)->create();
    }
}
