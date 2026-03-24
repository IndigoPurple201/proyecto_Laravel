<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiputadoLocalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("diputado_locals")->insert([
            ['id' => 1, 'nombre' => 'Claudia Aldrete García', 'partido_id' => 2, 'distrito_id' => 1],
            ['id' => 2, 'nombre' => 'Guillermo Ruiz Guerra', 'partido_id' => 3, 'distrito_id' => 2],
            ['id' => 3, 'nombre' => 'Sergio Zenón Velázquez Vázquez', 'partido_id' => 1, 'distrito_id' => 3],
            ['id' => 4, 'nombre' => 'María Guadalupe Oyervides Valdés', 'partido_id' => 1, 'distrito_id' => 4],
            ['id' => 5, 'nombre' => 'Jesús Alfredo Paredes López', 'partido_id' => 2, 'distrito_id' => 5],
            ['id' => 6, 'nombre' => 'Edith Hernández Sillas', 'partido_id' => 2, 'distrito_id' => 6],
            ['id' => 7, 'nombre' => 'Raúl Onofre Contreras', 'partido_id' => 1, 'distrito_id' => 7],
            ['id' => 8, 'nombre' => 'Gerardo Aguado Gómez', 'partido_id' => 2, 'distrito_id' => 8],
            ['id' => 9, 'nombre' => 'Blanca Rubí Lamas Velazquez', 'partido_id' => 2, 'distrito_id' => 9],
            ['id' => 10, 'nombre' => 'Felipe de Jesús González Miranda', 'partido_id' => 1, 'distrito_id' => 10],
            ['id' => 11, 'nombre' => 'Olivia Martínez Leyva', 'partido_id' => 1, 'distrito_id' => 11],
            ['id' => 12, 'nombre' => 'Edna Davalos Elizondo', 'partido_id' => 1, 'distrito_id' => 12],
            ['id' => 13, 'nombre' => 'Luz Elena Guadalupe Morales Núñez', 'partido_id' => 1, 'distrito_id' => 13],
            ['id' => 14, 'nombre' => 'María del Mar Treviño González', 'partido_id' => 1, 'distrito_id' => 14],
            ['id' => 15, 'nombre' => 'Beatriz Eugenia Fraustro Dávila', 'partido_id' => 1, 'distrito_id' => 15],
            ['id' => 16, 'nombre' => 'Álvaro Moreira Valdés', 'partido_id' => 1, 'distrito_id' => 16],
        ]);
    }
}
