<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class databaseSeeder extends Seeder
{
    use WithoutModelEvents;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            ClassificationsSeeder::class,
            GenresAnimeSeeder::class,
            GenresBookSeeder::class,
            GenresGameSeeder::class,
            GenresMangaSeeder::class,
            GenresMovieSerieSeeder::class
        ]);
    }
}
