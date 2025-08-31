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
            ['name' => 'action', 'category' => ContentTypeEnum::BOOK],
            ['name' => 'anthologies', 'category' => ContentTypeEnum::BOOK],
            ['name' => 'autobiography', 'category' => ContentTypeEnum::BOOK],
            ['name' => 'adventure', 'category' => ContentTypeEnum::BOOK],
            ['name' => 'biography', 'category' => ContentTypeEnum::BOOK],
            ['name' => 'home_garden', 'category' => ContentTypeEnum::BOOK],
            ['name' => 'classics', 'category' => ContentTypeEnum::BOOK],
            ['name' => 'comedy', 'category' => ContentTypeEnum::BOOK],
            ['name' => 'computers_internet', 'category' => ContentTypeEnum::BOOK],
            ['name' => 'contemporary', 'category' => ContentTypeEnum::BOOK],
            ['name' => 'short_stories', 'category' => ContentTypeEnum::BOOK],
            ['name' => 'true_crime', 'category' => ContentTypeEnum::BOOK],
            ['name' => 'crime', 'category' => ContentTypeEnum::BOOK],
            ['name' => 'christian', 'category' => ContentTypeEnum::BOOK],
            ['name' => 'chronicles', 'category' => ContentTypeEnum::BOOK],
            ['name' => 'cooking', 'category' => ContentTypeEnum::BOOK],
            ['name' => 'cultural_ethnic', 'category' => ContentTypeEnum::BOOK],
            ['name' => 'diaries', 'category' => ContentTypeEnum::BOOK],
            ['name' => 'dystopia', 'category' => ContentTypeEnum::BOOK],
            ['name' => 'drama', 'category' => ContentTypeEnum::BOOK],
            ['name' => 'ecofiction', 'category' => ContentTypeEnum::BOOK],
            ['name' => 'education_reference', 'category' => ContentTypeEnum::BOOK],
            ['name' => 'essays', 'category' => ContentTypeEnum::BOOK],
            ['name' => 'entertainment', 'category' => ContentTypeEnum::BOOK],
            ['name' => 'writing_publishing', 'category' => ContentTypeEnum::BOOK],
            ['name' => 'sports_outdoor_activities', 'category' => ContentTypeEnum::BOOK],
            ['name' => 'fables', 'category' => ContentTypeEnum::BOOK],
            ['name' => 'urban_fantasy', 'category' => ContentTypeEnum::BOOK],
            ['name' => 'fantasy', 'category' => ContentTypeEnum::BOOK],
            ['name' => 'feminist', 'category' => ContentTypeEnum::BOOK],
            ['name' => 'science_fiction', 'category' => ContentTypeEnum::BOOK],
            ['name' => 'gastronomy', 'category' => ContentTypeEnum::BOOK],
            ['name' => 'business_management', 'category' => ContentTypeEnum::BOOK],
            ['name' => 'gothic', 'category' => ContentTypeEnum::BOOK],
            ['name' => 'self-help_guide', 'category' => ContentTypeEnum::BOOK],
            ['name' => 'career_guides', 'category' => ContentTypeEnum::BOOK],
            ['name' => 'historical', 'category' => ContentTypeEnum::BOOK],
            ['name' => 'horror', 'category' => ContentTypeEnum::BOOK],
            ['name' => 'humanities_social_sciences', 'category' => ContentTypeEnum::BOOK],
            ['name' => 'humor_comedy', 'category' => ContentTypeEnum::BOOK],
            ['name' => 'children', 'category' => ContentTypeEnum::BOOK],
            ['name' => 'inspirational', 'category' => ContentTypeEnum::BOOK],
            ['name' => 'LGBTQ', 'category' => ContentTypeEnum::BOOK],
            ['name' => 'literary', 'category' => ContentTypeEnum::BOOK],
            ['name' => 'erotic_literature', 'category' => ContentTypeEnum::BOOK],
            ['name' => 'young_adult_literature', 'category' => ContentTypeEnum::BOOK],
            ['name' => 'manifesto', 'category' => ContentTypeEnum::BOOK],
            ['name' => 'mathematics_science', 'category' => ContentTypeEnum::BOOK],
            ['name' => 'mystery_crime', 'category' => ContentTypeEnum::BOOK],
            ['name' => 'non-fiction_for_children', 'category' => ContentTypeEnum::BOOK],
            ['name' => 'graphic_novel', 'category' => ContentTypeEnum::BOOK],
            ['name' => 'novella', 'category' => ContentTypeEnum::BOOK],
            ['name' => 'paranormal', 'category' => ContentTypeEnum::BOOK],
            ['name' => 'plays_Scripts', 'category' => ContentTypeEnum::BOOK],
            ['name' => 'poetry', 'category' => ContentTypeEnum::BOOK],
            ['name' => 'detective', 'category' => ContentTypeEnum::BOOK],
            ['name' => 'post-apocalyptic', 'category' => ContentTypeEnum::BOOK],
            ['name' => 'project', 'category' => ContentTypeEnum::BOOK],
            ['name' => 'non-fiction_comics', 'category' => ContentTypeEnum::BOOK],
            ['name' => 'religion_spirituality', 'category' => ContentTypeEnum::BOOK],
            ['name' => 'historical_romance', 'category' => ContentTypeEnum::BOOK],
            ['name' => 'romance', 'category' => ContentTypeEnum::BOOK],
            ['name' => 'health_wellness', 'category' => ContentTypeEnum::BOOK],
            ['name' => 'sex_relationships', 'category' => ContentTypeEnum::BOOK],
            ['name' => 'surreal', 'category' => ContentTypeEnum::BOOK],
            ['name' => 'technology', 'category' => ContentTypeEnum::BOOK],
            ['name' => 'thriller_suspense', 'category' => ContentTypeEnum::BOOK],
        ]);
    }
}
