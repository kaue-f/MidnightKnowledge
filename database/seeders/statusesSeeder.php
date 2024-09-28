<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class statusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('statuses')->insert([
            ['status' => 'Em Progresso'],
            ['status' => 'Lista de Desejos'],
            ['status' => 'Finalizado'],
            ['status' => 'Pausado'],
            ['status' => 'Dropado'],
        ]);
    }
}
