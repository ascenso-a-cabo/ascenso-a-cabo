<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            ['name' => 'dani', 'email' => 'dani@dani.com', 'password' => bcrypt('danidani'), 'media_notas' => 10, 'total_examenes' => 20, 'rol' => 'admin'],
            ['name' => 'marc', 'email' => 'marc@marc.com', 'password' => bcrypt('marcmarc'), 'media_notas' => 10, 'total_examenes' => 7, 'rol' => 'admin']
        ]);

        for ($i = 0; $i < 20; $i++) {
            DB::table('users')->insert([
                'name' => fake()->name(),
                'email' => fake()->unique()->safeEmail(),
                'password' => bcrypt('12345678'),
                'media_notas' => fake()->randomFloat(2, 0, 10),
                'total_examenes' => fake()->numberBetween(1, 10),
                'rol' => 'user'
            ]);
        }
    }
}
