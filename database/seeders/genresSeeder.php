<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class genresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('classification')->insert([
            ['classification' => 'Livre (L)',  'description' => 'Indicado para todas as idades.', 'image' => 'image/classification/livre.png'],
            ['classification' => '10 anos (10+)', 'description' => 'Adequado para crianças a partir de 10 anos.', 'image' => 'image/classification/10.png'],
            ['classification' => '12 anos (12+)', 'description' => 'Recomendado para pessoas a partir de 12 anos.', 'image' => 'image/classification/12.png'],
            ['classification' => '14 anos (14+)', 'description' => 'Indicado para adolescentes a partir de 14 anos.', 'image' => 'image/classification/14.png'],
            ['classification' => '16 anos (16+)', 'description' => 'Voltado para jovens a partir de 16 anos.', 'image' => 'image/classification/16.png'],
            ['classification' => '18 anos (18+)', 'description' => 'Apropriado apenas para maiores de 18 ano.', 'image' => 'image/classification/18.png'],
        ]);
    }
}
