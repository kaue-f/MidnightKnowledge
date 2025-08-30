<?php

namespace Database\Seeders\Genres;

use App\Enums\ContentTypeEnum;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenresBookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('genres')->insert([
            ['genre' => 'action', 'category' => ContentTypeEnum::BOOK],
            ['genre' => 'anthologies', 'category' => ContentTypeEnum::BOOK],
            ['genre' => 'autobiography', 'category' => ContentTypeEnum::BOOK],
            ['genre' => 'adventure', 'category' => ContentTypeEnum::BOOK],
            ['genre' => 'biography', 'category' => ContentTypeEnum::BOOK],
            ['genre' => 'home_garden', 'category' => ContentTypeEnum::BOOK],
            ['genre' => 'classics', 'category' => ContentTypeEnum::BOOK],
            ['genre' => 'comedy', 'category' => ContentTypeEnum::BOOK],
            ['genre' => 'computers_internet', 'category' => ContentTypeEnum::BOOK],
            ['genre' => 'contemporary', 'category' => ContentTypeEnum::BOOK],
            ['genre' => 'short_stories', 'category' => ContentTypeEnum::BOOK],
            ['genre' => 'true_crime', 'category' => ContentTypeEnum::BOOK],
            ['genre' => 'crime', 'category' => ContentTypeEnum::BOOK],
            ['genre' => 'christian', 'category' => ContentTypeEnum::BOOK],
            ['genre' => 'chronicles', 'category' => ContentTypeEnum::BOOK],
            ['genre' => 'cooking', 'category' => ContentTypeEnum::BOOK],
            ['genre' => 'cultural_ethnic', 'category' => ContentTypeEnum::BOOK],
            ['genre' => 'diaries', 'category' => ContentTypeEnum::BOOK],
            ['genre' => 'dystopia', 'category' => ContentTypeEnum::BOOK],
            ['genre' => 'drama', 'category' => ContentTypeEnum::BOOK],
            ['genre' => 'ecofiction', 'category' => ContentTypeEnum::BOOK],
            ['genre' => 'education_reference', 'category' => ContentTypeEnum::BOOK],
            ['genre' => 'essays', 'category' => ContentTypeEnum::BOOK],
            ['genre' => 'entertainment', 'category' => ContentTypeEnum::BOOK],
            ['genre' => 'writing_publishing', 'category' => ContentTypeEnum::BOOK],
            ['genre' => 'sports_outdoor_activities', 'category' => ContentTypeEnum::BOOK],
            ['genre' => 'fables', 'category' => ContentTypeEnum::BOOK],
            ['genre' => 'urban_fantasy', 'category' => ContentTypeEnum::BOOK],
            ['genre' => 'fantasy', 'category' => ContentTypeEnum::BOOK],
            ['genre' => 'feminist', 'category' => ContentTypeEnum::BOOK],
            ['genre' => 'science_fiction', 'category' => ContentTypeEnum::BOOK],
            ['genre' => 'gastronomy', 'category' => ContentTypeEnum::BOOK],
            ['genre' => 'business_management', 'category' => ContentTypeEnum::BOOK],
            ['genre' => 'gothic', 'category' => ContentTypeEnum::BOOK],
            ['genre' => 'self-help_guide', 'category' => ContentTypeEnum::BOOK],
            ['genre' => 'career_guides', 'category' => ContentTypeEnum::BOOK],
            ['genre' => 'historical', 'category' => ContentTypeEnum::BOOK],
            ['genre' => 'horror', 'category' => ContentTypeEnum::BOOK],
            ['genre' => 'humanities_social_sciences', 'category' => ContentTypeEnum::BOOK],
            ['genre' => 'humor_comedy', 'category' => ContentTypeEnum::BOOK],
            ['genre' => 'children', 'category' => ContentTypeEnum::BOOK],
            ['genre' => 'inspirational', 'category' => ContentTypeEnum::BOOK],
            ['genre' => 'LGBTQ', 'category' => ContentTypeEnum::BOOK],
            ['genre' => 'literary', 'category' => ContentTypeEnum::BOOK],
            ['genre' => 'erotic_literature', 'category' => ContentTypeEnum::BOOK],
            ['genre' => 'young_adult_literature', 'category' => ContentTypeEnum::BOOK],
            ['genre' => 'manifesto', 'category' => ContentTypeEnum::BOOK],
            ['genre' => 'mathematics_science', 'category' => ContentTypeEnum::BOOK],
            ['genre' => 'mystery_crime', 'category' => ContentTypeEnum::BOOK],
            ['genre' => 'non-fiction_for_children', 'category' => ContentTypeEnum::BOOK],
            ['genre' => 'graphic_novel', 'category' => ContentTypeEnum::BOOK],
            ['genre' => 'novella', 'category' => ContentTypeEnum::BOOK],
            ['genre' => 'paranormal', 'category' => ContentTypeEnum::BOOK],
            ['genre' => 'plays_Scripts', 'category' => ContentTypeEnum::BOOK],
            ['genre' => 'poetry', 'category' => ContentTypeEnum::BOOK],
            ['genre' => 'detective', 'category' => ContentTypeEnum::BOOK],
            ['genre' => 'post-apocalyptic', 'category' => ContentTypeEnum::BOOK],
            ['genre' => 'project', 'category' => ContentTypeEnum::BOOK],
            ['genre' => 'non-fiction_comics', 'category' => ContentTypeEnum::BOOK],
            ['genre' => 'religion_spirituality', 'category' => ContentTypeEnum::BOOK],
            ['genre' => 'historical_romance', 'category' => ContentTypeEnum::BOOK],
            ['genre' => 'romance', 'category' => ContentTypeEnum::BOOK],
            ['genre' => 'health_wellness', 'category' => ContentTypeEnum::BOOK],
            ['genre' => 'sex_relationships', 'category' => ContentTypeEnum::BOOK],
            ['genre' => 'surreal', 'category' => ContentTypeEnum::BOOK],
            ['genre' => 'technology', 'category' => ContentTypeEnum::BOOK],
            ['genre' => 'thriller_suspense', 'category' => ContentTypeEnum::BOOK],
        ]);
    }
}
