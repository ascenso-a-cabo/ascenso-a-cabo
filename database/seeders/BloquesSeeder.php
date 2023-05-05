<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BloquesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
            DB::table('bloques')->insert([
            ['capitulo_id' => 1, 'Reales Ordenanzas para las Fuerzas Armadas'],
            ['capitulo_id' => 1, 'Seguridad en las Fuerzas Armadas'],
            ['capitulo_id' => 1, 'Mando y Régimen Interior de las Unidades e instalaciones del Ejercito de Tierra'],
            ['capitulo_id' => 1, 'Legislación Militar'],
            ['capitulo_id' => 1, 'Régimen Disciplinario de las FAS y Código Penal Militar'],
            ['capitulo_id' => 1, 'Organización y funcionamiento del ET'],
            ['capitulo_id' => 1, 'Ley Orgánica 9/2011, de derechos y deberes de los miembros de las Fuerzas Armadas'],
            ['capitulo_id' => 1, 'Real Decreto 176/2014, por el que se regula el procedimiento para la tramitación de las iniciativas y quejas relativas al regimen de personal y a las condiciones de vida que pueda plantear el Militar'],
            ['capitulo_id' => 2, 'Instruccion táctica del Combatiente'],
            ['capitulo_id' => 2, 'Topografía'],
            ['capitulo_id' => 2, 'Armamento y teoría del tiro'],
            ['capitulo_id' => 2, 'Transmisiones'],
        ]);
    }
}
