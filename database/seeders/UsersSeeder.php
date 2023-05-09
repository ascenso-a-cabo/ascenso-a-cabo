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
            ['name' => 'dani', 'email' => 'dani@dani.com', 'password' => bcrypt('danidani')],
            ['name' => 'marc', 'email' => 'marc@marc.com', 'password' => bcrypt('marcmarc')]]);
    }
}
