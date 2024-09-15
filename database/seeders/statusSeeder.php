<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class statusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('status')->insert([
            ['status' => 'Já assisti', 'category' => 'Animes'],
            ['status' => 'Estou assistindo', 'category' => 'Animes'],
            ['status' => 'Quero assistir', 'category' => 'Animes'],
            ['status' => 'Já assisti', 'category' => 'Filmes'],
            ['status' => 'Estou assistindo', 'category' => 'Filmes'],
            ['status' => 'Quero assistir', 'category' => 'Filmes'],
            ['status' => 'Já joguei', 'category' => 'Games'],
            ['status' => 'Estou jogando', 'category' => 'Games'],
            ['status' => 'Quero jogar', 'category' => 'Games'],
            ['status' => 'Já li', 'category' => 'Mangás'],
            ['status' => 'Estou lendo', 'category' => 'Mangás'],
            ['status' => 'Quero ler', 'category' => 'Mangás'],
            ['status' => 'Já li', 'category' => 'Livros'],
            ['status' => 'Estou lendo', 'category' => 'Livros'],
            ['status' => 'Quero ler', 'category' => 'Livros'],
            ['status' => 'Já assisti', 'category' => 'Séries'],
            ['status' => 'Estou assistindo', 'category' => 'Séries'],
            ['status' => 'Quero assistir', 'category' => 'Séries'],
        ]);
    }
}
