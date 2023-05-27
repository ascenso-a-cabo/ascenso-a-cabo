<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TemasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('temas')->insert([
            ['id' => 1, 'bloque_id' => 1, 'nombre' => 'Disposiciones Generales'],
            ['id' => 2, 'bloque_id' => 1, 'nombre' => 'Del Militar'],
            ['id' => 3, 'bloque_id' => 1, 'nombre' => 'De la Disciplina'],
            ['id' => 4, 'bloque_id' => 1, 'nombre' => 'De la acción del Mando'],
            ['id' => 5, 'bloque_id' => 1, 'nombre' => 'De las Operaciones'],
            ['id' => 6, 'bloque_id' => 2, 'nombre' => 'Real Decreto 194/2010, sobre las normas de seguridad en las FAS'],
            ['id' => 7, 'bloque_id' => 2, 'nombre' => 'Orden Ministerial 50/2011, Normas sobre Mando y Régimen Interior'],
            ['id' => 8, 'bloque_id' => 3, 'nombre' => 'Disposiciones Generales'],
            ['id' => 9, 'bloque_id' => 3, 'nombre' => 'De la accion del Mando'],
            ['id' => 10, 'bloque_id' => 3, 'nombre' => 'Del Régimen Interior'],
            ['id' => 11, 'bloque_id' => 3, 'nombre' => 'Los servicios de las instalaciones'],
            ['id' => 12, 'bloque_id' => 3, 'nombre' => 'Las Guardias'],
            ['id' => 13, 'bloque_id' => 4, 'nombre' => 'Ley 39/2007 de la Carrera Militar'],
            ['id' => 14, 'bloque_id' => 4, 'nombre' => 'Ley 8/2006 de Tropa y Marinería'],
            ['id' => 15, 'bloque_id' => 5, 'nombre' => 'Ley Orgánica 8/2014, de Régimen Disciplinario de las Fuerzas Armadas'],
            ['id' => 16, 'bloque_id' => 5, 'nombre' => 'Ley Orgánica 14/2015, Del Código Penal Militar'],
            ['id' => 17, 'bloque_id' => 6, 'nombre' => 'Organización de las Fuerzas Armadas. Real Decreto 521/2020, de 19 de mayo,
            por el que se establece la organización básica de las Fuerzas Armadas'],
            ['id' => 18, 'bloque_id' => 6, 'nombre' => 'El Ejército de Tierra. Instrucción 14/2021, de 8 de marzo, del Jefe de Estado
            Mayor del Ejército de Tierra, por la que se desarrolla la organización del Ejército de Tierra'],
            ['id' => 19, 'bloque_id' => 7, 'nombre' => 'Disposiciones Generales'],
            ['id' => 20, 'bloque_id' => 7, 'nombre' => 'El Ejercicio de los derechos fundamentales y las libertades públicas'],
            ['id' => 21, 'bloque_id' => 7, 'nombre' => 'De los derechos y deberes de carácter profesional'],
            ['id' => 22, 'bloque_id' => 7, 'nombre' => 'Apoyo al personal'],
            ['id' => 23, 'bloque_id' => 7, 'nombre' => 'DE las asociaciones profesionales de los miembros de las Fuerzas Armadas'],
            ['id' => 24, 'bloque_id' => 7, 'nombre' => 'Del Consejo de Personal de las Fuerzas Armadas'],
            ['id' => 25, 'bloque_id' => 7, 'nombre' => 'Del observatorio de la vida militar'],
            ['id' => 26, 'bloque_id' => 8, 'nombre' => 'Disposiciones Generales'],
            ['id' => 27, 'bloque_id' => 8, 'nombre' => 'Tramitación de iniciativas'],
            ['id' => 28, 'bloque_id' => 8, 'nombre' => 'Tramitación de quejas'],
            ['id' => 29, 'bloque_id' => 9, 'nombre' => 'Instrucción de combate'],
            ['id' => 30, 'bloque_id' => 9, 'nombre' => 'Instruccion NBQ'],
            ['id' => 31, 'bloque_id' => 9, 'nombre' => 'Escuadra / Equipo'],
            ['id' => 32, 'bloque_id' => 10, 'nombre' => 'Cartografía'],
            ['id' => 33, 'bloque_id' => 10, 'nombre' => 'Orientación'],
            ['id' => 34, 'bloque_id' => 10, 'nombre' => 'Navegación'],
            ['id' => 35, 'bloque_id' => 11, 'nombre' => 'Normas Generales en el uso de las Armas'],
            ['id' => 36, 'bloque_id' => 11, 'nombre' => 'Ametralladora MG-42'],
            ['id' => 37, 'bloque_id' => 11, 'nombre' => 'Ametralladora ligera MG-4 ET'],
            ['id' => 38, 'bloque_id' => 11, 'nombre' => 'Granada de mano Alhambra'],
            ['id' => 39, 'bloque_id' => 11, 'nombre' => 'Pistola USP COmpact'],
            ['id' => 40, 'bloque_id' => 11, 'nombre' => 'Teoría del tiro'],
            ['id' => 41, 'bloque_id' => 12, 'nombre' => 'Conocimientos básicos para transmitir'],
            ['id' => 42, 'bloque_id' => 12, 'nombre' => 'PR4G'],
            ['id' => 43, 'bloque_id' => 12, 'nombre' => 'Radioteléfono PNR-500'],
            
            
        ]);
    }
}
