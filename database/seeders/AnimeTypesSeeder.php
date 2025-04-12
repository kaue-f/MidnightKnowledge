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
            ['name' => 'Movies', 'description' => 'Filmes lançados nos cinemas ou como produções especiais.'],
            ['name' => 'OVA', 'description' => 'Episódios lançados diretamente em mídia física, sem exibição na TV.'],
            ['name' => 'ONA', 'description' => 'Produzidos diretamente para streaming'],
            ['name' => 'Special', 'description' => 'Episódios extras, especiais de TV ou conteúdos bônus.'],
            ['name' => 'Music', 'description' => 'Clipes musicais, shows animados ou episódios focados em performances.'],
        ]);
    }
}
