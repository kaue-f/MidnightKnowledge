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
            ['name' => 'action', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['name' => 'animation', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['name' => 'anime', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['name' => 'adventure', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['name' => 'biography', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['name' => 'home_garden', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['name' => 'romantic_comedy', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['name' => 'comedy', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['name' => 'crime', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['name' => 'short_film', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['name' => 'cyberpunk', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['name' => 'documentary', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['name' => 'docuseries', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['name' => 'dorama', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['name' => 'medical_drama', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['name' => 'drama', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['name' => 'entertainment', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['name' => 'sports', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['name' => 'fantasy', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['name' => 'western', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['name' => 'faith_spirituality', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['name' => 'holidays', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['name' => 'sci-fi', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['name' => 'game_show', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['name' => 'war', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['name' => 'history', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['name' => 'historical', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['name' => 'kids_family', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['name' => 'mystery_thriller', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['name' => 'mystery', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['name' => 'music', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['name' => 'musical', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['name' => 'nature', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['name' => 'news', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['name' => 'soap_opera', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['name' => 'police', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['name' => 'reality', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['name' => 'romance', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['name' => 'health_wellness', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['name' => 'stand-up', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['name' => 'thriller', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['name' => 'talk Show', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['name' => 'horror', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['name' => 'psychological_thriller', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['name' => 'variety_show', 'category' => ContentTypeEnum::MOVIE_SERIE],
            ['name' => 'travel', 'category' => ContentTypeEnum::MOVIE_SERIE],
        ]);
    }
}
