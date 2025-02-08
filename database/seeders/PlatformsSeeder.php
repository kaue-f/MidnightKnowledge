<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PlatformsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('platforms')->insert([
            ['name' => 'Android', 'category' => 'Mobile'],
            ['name' => 'Battle.net', 'category' => 'PC'],
            ['name' => 'Epic Games Store', 'category' => 'PC'],
            ['name' => 'iOS', 'category' => 'Mobile'],
            ['name' => 'Mac OS', 'category' => 'PC'],
            ['name' => 'Microsoft Windows', 'category' => 'PC'],
            ['name' => 'Nintendo 3DS', 'category' => 'Consoles'],
            ['name' => 'Nintendo DS', 'category' => 'Consoles'],
            ['name' => 'Nintendo Switch', 'category' => 'Consoles'],
            ['name' => 'Origin', 'category' => 'PC'],
            ['name' => 'Outros', 'category' => 'Outros'],
            ['name' => 'PlayStation 1', 'category' => 'Consoles'],
            ['name' => 'PlayStation 2', 'category' => 'Consoles'],
            ['name' => 'PlayStation 3', 'category' => 'Consoles'],
            ['name' => 'PlayStation 4', 'category' => 'Consoles'],
            ['name' => 'PlayStation 5', 'category' => 'Consoles'],
            ['name' => 'PlayStation Vita', 'category' => 'Consoles'],
            ['name' => 'PSP', 'category' => 'Consoles'],
            ['name' => 'Steam', 'category' => 'PC'],
            ['name' => 'Ubisoft Connect', 'category' => 'PC'],
            ['name' => 'Xbox 360', 'category' => 'Consoles'],
            ['name' => 'Xbox One', 'category' => 'Consoles'],
            ['name' => 'Xbox Series X/S', 'category' => 'Consoles'],
        ]);
    }
}
