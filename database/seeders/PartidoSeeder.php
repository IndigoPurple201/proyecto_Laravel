<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('partidos')->insert([
            ['id' => 1, 'nombre' => 'PRI'],
            ['id' => 2, 'nombre' => 'PAN'],
            ['id' => 3, 'nombre' => 'PRD'],
        ]);
    }
}
