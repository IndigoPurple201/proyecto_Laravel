<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistritoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('distritos')->insert([
            ["id" =>1, "numero" => 1],
            ["id"=> 2, "numero"=> 2],
            ["id"=> 3, "numero"=> 3],
            ["id"=> 4, "numero"=> 4],
            ["id"=> 5, "numero"=> 5],
            ["id"=> 6, "numero"=> 6],
            ["id"=> 7, "numero"=> 7],
            ["id"=> 8, "numero"=> 8],
            ["id"=> 9, "numero"=> 9],
            ["id"=> 10, "numero"=> 10],
            ["id"=> 11, "numero"=> 11],
            ["id"=> 12, "numero"=> 12],
            ["id"=> 13, "numero"=> 13],
            ["id"=> 14, "numero"=> 14],
            ["id"=> 15, "numero"=> 15],
            ["id"=> 16, "numero"=> 16],
        ]);
    }
}
