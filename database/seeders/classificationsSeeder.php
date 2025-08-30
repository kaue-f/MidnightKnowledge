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
            ['name' => 'L', 'image' => 'images/classifications/livre.png'],
            ['name' => '10', 'image' => 'images/classifications/10.png'],
            ['name' => '12', 'image' => 'images/classifications/12.png'],
            ['name' => '14', 'image' => 'images/classifications/14.png'],
            ['name' => '16',  'image' => 'images/classifications/16.png'],
            ['name' => '18', 'image' => 'images/classifications/18.png'],
        ]);
    }
}
