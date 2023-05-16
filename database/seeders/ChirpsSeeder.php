<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChirpsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        for ($i = 0; $i < 20; $i++) {
            DB::table('chirps')->insert([
                'message' => fake()->text(140),
                'user_id' => fake()->numberBetween(1, 20)
            ]);
        }
    }
}
