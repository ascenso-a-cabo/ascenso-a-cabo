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
            ['bloque_id' => 1, 'nombre' => 'Disposiciones Generales'],
            ['bloque_id' => 1, 'nombre' => 'Del Militar'],
            ['bloque_id' => 1, 'nombre' => 'De la Disciplina'],
            ['bloque_id' => 1, 'nombre' => 'De la acción del Mando'],
            ['bloque_id' => 1, 'nombre' => 'De las Operaciones'],
            ['bloque_id' => 2, 'nombre' => 'Real Decreto 194/2010, sobre las normas de seguridad en las FAS'],
            ['bloque_id' => 2, 'nombre' => 'Orden Ministerial 50/2011, Normas sobre Mando y Régimen Interior'],
            ['bloque_id' => 3, 'nombre' => 'Disposiciones Generales'],
            ['bloque_id' => 3, 'nombre' => 'De la accion del Mando'],
            ['bloque_id' => 3, 'nombre' => 'Del Régimen Interior'],
            ['bloque_id' => 3, 'nombre' => 'Los servicios de las instalaciones'],
            ['bloque_id' => 3, 'nombre' => 'Las Guardias'],
            ['bloque_id' => 4, 'nombre' => 'Ley 39/2007 de la Carrera Militar'],
            ['bloque_id' => 4, 'nombre' => 'Ley 8/2006 de Tropa y Marinería'],
            ['bloque_id' => 5, 'nombre' => 'Ley Orgánica 8/2014, de Régimen Disciplinario de las Fuerzas Armadas'],
            ['bloque_id' => 5, 'nombre' => 'Ley Orgánica 14/2015, Del Código Penal Militar'],
            ['bloque_id' => 6, 'nombre' => 'Organización de las Fuerzas Armadas. Real Decreto 521/2020, de 19 de mayo,
            por el que se establece la organización básica de las Fuerzas Armadas'],
            ['bloque_id' => 6, 'nombre' => 'El Ejército de Tierra. Instrucción 14/2021, de 8 de marzo, del Jefe de Estado
            Mayor del Ejército de Tierra, por la que se desarrolla la organización del Ejército de Tierra'],
            ['bloque_id' => 7, 'nombre' => 'Disposiciones Generales'],
            ['bloque_id' => 7, 'nombre' => 'El Ejercicio de los derechos fundamentales y las libertades públicas'],
            ['bloque_id' => 7, 'nombre' => 'De los derechos y deberes de carácter profesional'],
            ['bloque_id' => 7, 'nombre' => 'Apoyo al personal'],
            ['bloque_id' => 7, 'nombre' => 'DE las asociaciones profesionales de los miembros de las Fuerzas Armadas'],
            ['bloque_id' => 7, 'nombre' => 'Del Consejo de Personal de las Fuerzas Armadas'],
            ['bloque_id' => 7, 'nombre' => 'Del observatorio de la vida militar'],
            ['bloque_id' => 8, 'nombre' => 'Disposiciones Generales'],
            ['bloque_id' => 8, 'nombre' => 'Tramitación de iniciativas'],
            ['bloque_id' => 8, 'nombre' => 'Tramitación de quejas'],
            ['bloque_id' => 9, 'nombre' => 'Instrucción de combate'],
            ['bloque_id' => 9, 'nombre' => 'Instruccion NBQ'],
            ['bloque_id' => 9, 'nombre' => 'Escuadra / Equipo'],
            ['bloque_id' => 10, 'nombre' => 'Cartografía'],
            ['bloque_id' => 10, 'nombre' => 'Orientación'],
            ['bloque_id' => 10, 'nombre' => 'Navegación'],
            ['bloque_id' => 11, 'nombre' => 'Normas Generales en el uso de las Armas'],
            ['bloque_id' => 11, 'nombre' => 'Ametralladora MG-42'],
            ['bloque_id' => 11, 'nombre' => 'Ametralladora ligera MG-4 ET'],
            ['bloque_id' => 11, 'nombre' => 'Granada de mano Alhambra'],
            ['bloque_id' => 11, 'nombre' => 'Pistola USP COmpact'],
            ['bloque_id' => 11, 'nombre' => 'Teoría del tiro'],
            ['bloque_id' => 12, 'nombre' => 'Conocimientos básicos para transmitir'],
            ['bloque_id' => 12, 'nombre' => 'PR4G'],
            ['bloque_id' => 12, 'nombre' => 'Radioteléfono PNR-500'],
            
            
        ]);
    }
}
