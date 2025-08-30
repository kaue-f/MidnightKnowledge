<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookFormatsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('formats')->insert([
            ['name' => 'audiobook'],
            ['name' => 'braille'],
            ['name' => 'ebook'],
            ['name' => 'hybrid'],
            ['name' => 'interactive'],
            ['name' => 'online'],
            ['name' => 'printed'],
        ]);
    }
}
