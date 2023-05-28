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
            ['id' => 1, 'capitulo_id' => 1, 'nombre' => 'Reales Ordenanzas para las Fuerzas Armadas'],
            ['id' => 2, 'capitulo_id' => 1, 'nombre' => 'Seguridad en las Fuerzas Armadas'],
            ['id' => 3, 'capitulo_id' => 1, 'nombre' => 'Mando y Régimen Interior de las Unidades e instalaciones del Ejercito de Tierra'],
            ['id' => 4, 'capitulo_id' => 1, 'nombre' => 'Legislación Militar'],
            ['id' => 5, 'capitulo_id' => 1, 'nombre' => 'Régimen Disciplinario de las FAS y Código Penal Militar'],
            ['id' => 6, 'capitulo_id' => 1, 'nombre' => 'Organización y funcionamiento del ET'],
            ['id' => 7, 'capitulo_id' => 1, 'nombre' => 'Ley Orgánica 9/2011, de derechos y deberes de los miembros de las Fuerzas Armadas'],
            ['id' => 8, 'capitulo_id' => 1, 'nombre' => 'Real Decreto 176/2014, por el que se regula el procedimiento para la tramitación de las iniciativas y quejas relativas al regimen de personal y a las condiciones de vida que pueda plantear el Militar'],
            ['id' => 9, 'capitulo_id' => 2, 'nombre' => 'Instruccion táctica del Combatiente'],
            ['id' => 10, 'capitulo_id' => 2, 'nombre' => 'Topografía'],
            ['id' => 11, 'capitulo_id' => 2, 'nombre' => 'Armamento y teoría del tiro'],
            ['id' => 12, 'capitulo_id' => 2, 'nombre' => 'Transmisiones'],
            ['id' => 13, 'capitulo_id' => 2, 'nombre' => 'prueba'],
            ['id' => 14, 'capitulo_id' => 2, 'nombre' => 'prueba'],
            ['id' => 15, 'capitulo_id' => 2, 'nombre' => 'prueba'],
        ]);
    }
}
