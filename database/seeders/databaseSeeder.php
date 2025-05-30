<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\Genres\GenresBookSeeder;
use Database\Seeders\Genres\GenresGameSeeder;
use Database\Seeders\Genres\GenresAnimeSeeder;
use Database\Seeders\Genres\GenresMangaSeeder;
use Database\Seeders\Genres\GenresMovieSerieSeeder;
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
            AnimeTypesSeeder::class,
            BookFormatsSeeder::class,
            ClassificationsSeeder::class,
            GenresAnimeSeeder::class,
            GenresBookSeeder::class,
            GenresGameSeeder::class,
            GenresMangaSeeder::class,
            GenresMovieSerieSeeder::class,
            MangaTypesSeeder::class,
            PlatformsSeeder::class
        ]);
    }
}
