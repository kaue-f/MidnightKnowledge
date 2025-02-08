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
            ['name' => 'TV', 'description' => 'Exibidos na TV em episódios semanais.'],
            ['name' => 'Movies', 'description' => ''],
            ['name' => 'OVA', 'description' => ''],
            ['name' => 'ONA', 'description' => 'Produzidos diretamente para streaming'],
            ['name' => 'Special', 'description' => ''],
            ['name' => 'Music', 'description' => ''],
        ]);
    }
}
