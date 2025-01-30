<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassificationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('classifications')->insert([
            ['classification' => 'Livre (L)',  'description' => 'Indicado para todas as idades.', 'image' => 'images/classifications/livre.png'],
            ['classification' => '10 anos (10+)', 'description' => 'Adequado para crianças a partir de 10 anos.', 'image' => 'images/classifications/10.png'],
            ['classification' => '12 anos (12+)', 'description' => 'Recomendado para pessoas a partir de 12 anos.', 'image' => 'images/classifications/12.png'],
            ['classification' => '14 anos (14+)', 'description' => 'Indicado para adolescentes a partir de 14 anos.', 'image' => 'images/classifications/14.png'],
            ['classification' => '16 anos (16+)', 'description' => 'Voltado para jovens a partir de 16 anos.', 'image' => 'images/classifications/16.png'],
            ['classification' => '18 anos (18+)', 'description' => 'Apropriado apenas para maiores de 18 ano.', 'image' => 'images/classifications/18.png'],
        ]);
    }
}
