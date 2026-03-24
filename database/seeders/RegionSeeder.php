<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('regiones')->insert([
            ['id' => 1, 'nombre' => 'CARBONIFERA'],
            ['id' => 2, 'nombre' => 'CENTRO'],
            ['id' => 3, 'nombre' => 'CENTRO - DESIERTO'],
            ['id' => 4, 'nombre' => 'CINCO MANANTIALES'],
            ['id' => 5, 'nombre' => 'LAGUNA'],
            ['id' => 6, 'nombre' => 'NORTE'],
            ['id' => 7, 'nombre' => 'SURESTE'],
        ]);
    }
}
