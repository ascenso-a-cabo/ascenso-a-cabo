<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CapitulosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('capitulos')->insert([
            ['nombre' => 'Ambito de formación general Militar'],
            ['nombre' => 'Ambito de instruccion táctica y técnica']
        ]);
    }
}
