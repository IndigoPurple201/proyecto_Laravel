<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MunicipioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("municipios")->insert([
            ['id' => 1, 'nombre' => 'ABASOLO', 'entidad' => 5, 'no_municipio' => 1, 'mapa' => 'Abasolo. Coah. México', 'region_id' => 2],
            ['id' => 2, 'nombre' => 'ACUÑA', 'entidad' => 5, 'no_municipio' => 2, 'mapa' => 'Acuña. Coah. México', 'region_id' => 6],
            ['id' => 3, 'nombre' => 'ALLENDE', 'entidad' => 5, 'no_municipio' => 3, 'mapa' => 'Allende. Coah. México', 'region_id' => 4],
            ['id' => 4, 'nombre' => 'ARTEAGA', 'entidad' => 5, 'no_municipio' => 4, 'mapa' => 'Arteaga. Coah. México', 'region_id' => 7],
            ['id' => 5, 'nombre' => 'CANDELA', 'entidad' => 5, 'no_municipio' => 5, 'mapa' => 'Candela. Coah. México', 'region_id' => 2],
            ['id' => 6, 'nombre' => 'CASTAÑOS', 'entidad' => 5, 'no_municipio' => 6, 'mapa' => 'Castaños. Coah. México', 'region_id' => 2],
            ['id' => 7, 'nombre' => 'CUATRO CIÉNEGAS', 'entidad' => 5, 'no_municipio' => 7, 'mapa' => "Cuatro Ciénegas. Coah. México", 'region_id' => 3],
            ['id' => 8, 'nombre' => "ESCOBEDO", "entidad" => 5, "no_municipio" => 8, "mapa" =>'Escobedo. Coah. México', "region_id" =>2],
            ['id' => 9, 'nombre' => "FRANCISCO I. MADERO", "entidad" => 5, "no_municipio" => 9, "mapa" => 'Francisco I. Madero. Coah. México', "region_id" => 5],
            ['id' => 10, 'nombre' => "FRONTERA", "entidad" => 5, "no_municipio" => 10, "mapa" => 'Frontera. Coah. México', "region_id" => 2],
            ['id' => 11, 'nombre' => "GENERAL CEPEDA", "entidad" => 5, "no_municipio" => 11, "mapa" => 'General Cepeda. Coah. México', "region_id" => 7],
            ['id' => 12, 'nombre' => "GUERRERO", "entidad" => 5, "no_municipio" => 12, "mapa" => 'Guerrero. Coah. México', "region_id" => 6],
            ['id' => 13, 'nombre' => "HIDALGO", "entidad" => 5, "no_municipio" => 13, "mapa" => 'Hidalgo. Coah. México', "region_id" => 6],
            ['id' => 14, 'nombre' => "JIMÉNEZ", "entidad" => 5, "no_municipio" => 14, "mapa" =>'Jiménez. Coah. México', "region_id" =>6],
            ['id' => 15, 'nombre' => "JUÁREZ", "entidad" => 5, "no_municipio" => 15, "mapa" => 'Juárez. Coah. México', "region_id" => 1],
            ['id' => 16, 'nombre' => "LAMADRID", "entidad" => 5, "no_municipio" => 16, "mapa" => 'Lamadrid. Coah. México', "region_id" => 3],
            ['id' => 17, 'nombre' => "MATAMOROS", "entidad" => 5, "no_municipio" => 17, "mapa" => 'Matamoros. Coah. México', "region_id" => 5],
            ['id' => 18, 'nombre' => "MONCLOVA", "entidad" => 5, "no_municipio" => 18, "mapa" => 'Monclova. Coah. México', "region_id" => 2],
            ['id' => 19, 'nombre' => "MORELOS", "entidad" => 5, "no_municipio" => 19, "mapa" => 'Morelos. Coah. México', "region_id" => 4],
            ['id' => 20, 'nombre' => "MÚZQUIZ", "entidad" => 5, "no_municipio" => 20, "mapa" =>'Múzquiz. Coah. México', "region_id" =>1],
            ['id' => 21, 'nombre' => "NADADORES", "entidad" => 5, "no_municipio" => 21, "mapa" =>'Nadadores. Coah. México', "region_id" =>3],
            ['id' => 22, 'nombre' => "NAVA", "entidad" => 5, "no_municipio" => 22, "mapa" =>'Nava. Coah. México', "region_id" =>4],
            ['id' => 23, 'nombre' => "OCAMPO", "entidad" => 5, "no_municipio" => 23, "mapa" =>'Ocampo. Coah. México', "region_id" =>3],
            ['id' => 24, 'nombre' => "PARRAS", "entidad" => 5, "no_municipio" => 24, "mapa" =>'Parras. Coah. México', "region_id" =>7],
            ['id' => 25, 'nombre' => "PIEDRAS NEGRAS", "entidad" => 5, "no_municipio" => 25, "mapa" =>'Piedras Negras. Coah. México', "region_id" =>6],
            ['id' => 26, 'nombre' => "PROGRESO", "entidad" => 5, "no_municipio" => 26, "mapa" =>'Progreso. Coah. México', "region_id" =>1],
            ['id' => 27, 'nombre' => "RAMOS ARIZPE", "entidad" => 5, "no_municipio" => 27, "mapa" =>'Ramos Arizpe. Coah. México', "region_id" =>7],
            ['id' => 28, 'nombre' => "SABINAS", "entidad" => 5, "no_municipio" => 28, "mapa" =>'Sabinas. Coah. México', "region_id" =>1],
            ['id' => 29, 'nombre' => "SACRAMENTO", "entidad" => 5, "no_municipio" => 29, "mapa" =>'Sacramento. Coah. México', "region_id" =>3],
            ['id' => 30, 'nombre' => "SALTILLO", "entidad" => 5, "no_municipio" => 30, "mapa" =>'Saltillo. Coah. México', "region_id" =>2],
        ]);
    }
}
