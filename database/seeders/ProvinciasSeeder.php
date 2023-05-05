<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinciasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('provincias')->insert([
            ['nombre' => 'Álava'],
            ['nombre' => 'Albacete'],
            ['nombre' => 'Alicante'],
            ['nombre' => 'Almería'],
            ['nombre' => 'Asturias'],
            ['nombre' => 'Ávila'],
            ['nombre' => 'Badajoz'],
            ['nombre' => 'Baleares'],
            ['nombre' => 'Barcelona'],
            ['nombre' => 'Burgos'],
            ['nombre' => 'Cáceres'],
            ['nombre' => 'Cádiz'],
            ['nombre' => 'Cantabria'],
            ['nombre' => 'Castellón'],
            ['nombre' => 'Ceuta'],
            ['nombre' => 'Ciudad Real'],
            ['nombre' => 'Córdoba'],
            ['nombre' => 'Cuenca'],
            ['nombre' => 'Gerona'],
            ['nombre' => 'Granada'],
            ['nombre' => 'Guadalajara'],
            ['nombre' => 'Guipúzcoa'],
            ['nombre' => 'Huelva'],
            ['nombre' => 'Huesca'],
            ['nombre' => 'Jaén'],
            ['nombre' => 'La Coruña'],
            ['nombre' => 'La Rioja'],
            ['nombre' => 'Las Palmas'],
            ['nombre' => 'León'],
            ['nombre' => 'Lérida'],
            ['nombre' => 'Lugo'],
            ['nombre' => 'Madrid'],
            ['nombre' => 'Málaga'],
            ['nombre' => 'Melilla'],
            ['nombre' => 'Murcia'],
            ['nombre' => 'Navarra'],
            ['nombre' => 'Orense'],
            ['nombre' => 'Palencia'],
            ['nombre' => 'Pontevedra'],
            ['nombre' => 'Salamanca'],
            ['nombre' => 'Segovia'],
            ['nombre' => 'Sevilla'],
            ['nombre' => 'Soria'],
            ['nombre' => 'Tarragona'],
            ['nombre' => 'Tenerife'],
            ['nombre' => 'Teruel'],
            ['nombre' => 'Toledo'],
            ['nombre' => 'Valencia'],
            ['nombre' => 'Valladolid'],
            ['nombre' => 'Vizcaya'],
            ['nombre' => 'Zamora'],
            ['nombre' => 'Zaragoza'],
        ]);
    }
}
