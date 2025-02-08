<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MangaTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('manga_types')->insert([
            ['name' => '4-Koma', 'description' => ''],
            ['name' => 'Adaptation', 'description' => ''],
            ['name' => 'Anthology', 'description' => ''],
            ['name' => 'Award Winning', 'description' => ''],
            ['name' => 'Doujinshi', 'description' => ''],
            ['name' => 'Fan Colored', 'description' => ''],
            ['name' => 'Full Color', 'description' => ''],
            ['name' => 'Long Strip', 'description' => ''],
            ['name' => 'Official Colored', 'description' => ''],
            ['name' => 'Oneshot', 'description' => ''],
            ['name' => 'Self-Published', 'description' => ''],
            ['name' => 'Web Comic', 'description' => ''],
        ]);
    }
}
