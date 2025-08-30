<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AnimeTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('anime_types')->insert([
            ['name' => 'TV'],
            ['name' => 'Movies'],
            ['name' => 'OVA'],
            ['name' => 'ONA'],
            ['name' => 'Music'],
            ['name' => 'Special'],
        ]);
    }
}
