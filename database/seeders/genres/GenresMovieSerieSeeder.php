<?php

namespace Database\Seeders\Genres;

use App\Enums\ContentTypeEnum;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenresMovieSerieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('genres')->insert([
            ['genre' => 'action', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['genre' => 'animation', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['genre' => 'anime', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['genre' => 'adventure', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['genre' => 'biography', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['genre' => 'home_garden', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['genre' => 'romantic_comedy', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['genre' => 'comedy', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['genre' => 'crime', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['genre' => 'short_film', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['genre' => 'cyberpunk', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['genre' => 'documentary', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['genre' => 'docuseries', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['genre' => 'dorama', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['genre' => 'medical_drama', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['genre' => 'drama', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['genre' => 'entertainment', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['genre' => 'sports', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['genre' => 'fantasy', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['genre' => 'western', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['genre' => 'faith_spirituality', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['genre' => 'holidays', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['genre' => 'sci-fi', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['genre' => 'game_show', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['genre' => 'war', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['genre' => 'history', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['genre' => 'historical', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['genre' => 'kids_family', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['genre' => 'mystery_thriller', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['genre' => 'mystery', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['genre' => 'music', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['genre' => 'musical', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['genre' => 'nature', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['genre' => 'news', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['genre' => 'soap_opera', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['genre' => 'police', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['genre' => 'reality', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['genre' => 'romance', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['genre' => 'health_wellness', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['genre' => 'stand-up', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['genre' => 'thriller', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['genre' => 'talk Show', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['genre' => 'horror', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['genre' => 'psychological_thriller', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['genre' => 'variety_show', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['genre' => 'travel', 'category' => ContentTypeEnum::MOVIE_SERIE],
        ]);
    }
}
