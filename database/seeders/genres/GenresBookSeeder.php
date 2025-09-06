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
            ['name' => 'action', 'category' => ContentTypeEnum::BOOK, 'is_adult' => false],
            ['name' => 'anthologies', 'category' => ContentTypeEnum::BOOK, 'is_adult' => false],
            ['name' => 'autobiography', 'category' => ContentTypeEnum::BOOK, 'is_adult' => false],
            ['name' => 'adventure', 'category' => ContentTypeEnum::BOOK, 'is_adult' => false],
            ['name' => 'biography', 'category' => ContentTypeEnum::BOOK, 'is_adult' => false],
            ['name' => 'home_garden', 'category' => ContentTypeEnum::BOOK, 'is_adult' => false],
            ['name' => 'classics', 'category' => ContentTypeEnum::BOOK, 'is_adult' => false],
            ['name' => 'comedy', 'category' => ContentTypeEnum::BOOK, 'is_adult' => false],
            ['name' => 'computers_internet', 'category' => ContentTypeEnum::BOOK, 'is_adult' => false],
            ['name' => 'contemporary', 'category' => ContentTypeEnum::BOOK, 'is_adult' => false],
            ['name' => 'short_stories', 'category' => ContentTypeEnum::BOOK, 'is_adult' => false],
            ['name' => 'true_crime', 'category' => ContentTypeEnum::BOOK, 'is_adult' => false],
            ['name' => 'crime', 'category' => ContentTypeEnum::BOOK, 'is_adult' => false],
            ['name' => 'christian', 'category' => ContentTypeEnum::BOOK, 'is_adult' => false],
            ['name' => 'chronicles', 'category' => ContentTypeEnum::BOOK, 'is_adult' => false],
            ['name' => 'cooking', 'category' => ContentTypeEnum::BOOK, 'is_adult' => false],
            ['name' => 'cultural_ethnic', 'category' => ContentTypeEnum::BOOK, 'is_adult' => false],
            ['name' => 'diaries', 'category' => ContentTypeEnum::BOOK, 'is_adult' => false],
            ['name' => 'dystopia', 'category' => ContentTypeEnum::BOOK, 'is_adult' => false],
            ['name' => 'drama', 'category' => ContentTypeEnum::BOOK, 'is_adult' => false],
            ['name' => 'ecofiction', 'category' => ContentTypeEnum::BOOK, 'is_adult' => false],
            ['name' => 'education_reference', 'category' => ContentTypeEnum::BOOK, 'is_adult' => false],
            ['name' => 'essays', 'category' => ContentTypeEnum::BOOK, 'is_adult' => false],
            ['name' => 'entertainment', 'category' => ContentTypeEnum::BOOK, 'is_adult' => false],
            ['name' => 'writing_publishing', 'category' => ContentTypeEnum::BOOK, 'is_adult' => false],
            ['name' => 'sports_outdoor_activities', 'category' => ContentTypeEnum::BOOK, 'is_adult' => false],
            ['name' => 'fables', 'category' => ContentTypeEnum::BOOK, 'is_adult' => false],
            ['name' => 'urban_fantasy', 'category' => ContentTypeEnum::BOOK, 'is_adult' => false],
            ['name' => 'fantasy', 'category' => ContentTypeEnum::BOOK, 'is_adult' => false],
            ['name' => 'feminist', 'category' => ContentTypeEnum::BOOK, 'is_adult' => false],
            ['name' => 'science_fiction', 'category' => ContentTypeEnum::BOOK, 'is_adult' => false],
            ['name' => 'gastronomy', 'category' => ContentTypeEnum::BOOK, 'is_adult' => false],
            ['name' => 'business_management', 'category' => ContentTypeEnum::BOOK, 'is_adult' => false],
            ['name' => 'gothic', 'category' => ContentTypeEnum::BOOK, 'is_adult' => false],
            ['name' => 'self-help_guide', 'category' => ContentTypeEnum::BOOK, 'is_adult' => false],
            ['name' => 'career_guides', 'category' => ContentTypeEnum::BOOK, 'is_adult' => false],
            ['name' => 'historical', 'category' => ContentTypeEnum::BOOK, 'is_adult' => false],
            ['name' => 'horror', 'category' => ContentTypeEnum::BOOK, 'is_adult' => false],
            ['name' => 'humanities_social_sciences', 'category' => ContentTypeEnum::BOOK, 'is_adult' => false],
            ['name' => 'humor_comedy', 'category' => ContentTypeEnum::BOOK, 'is_adult' => false],
            ['name' => 'children', 'category' => ContentTypeEnum::BOOK, 'is_adult' => false],
            ['name' => 'inspirational', 'category' => ContentTypeEnum::BOOK, 'is_adult' => false],
            ['name' => 'LGBTQ', 'category' => ContentTypeEnum::BOOK, 'is_adult' => false],
            ['name' => 'literary', 'category' => ContentTypeEnum::BOOK, 'is_adult' => false],
            ['name' => 'erotic_literature', 'category' => ContentTypeEnum::BOOK, 'is_adult' => true],
            ['name' => 'young_adult_literature', 'category' => ContentTypeEnum::BOOK, 'is_adult' => false],
            ['name' => 'manifesto', 'category' => ContentTypeEnum::BOOK, 'is_adult' => false],
            ['name' => 'mathematics_science', 'category' => ContentTypeEnum::BOOK, 'is_adult' => false],
            ['name' => 'mystery_crime', 'category' => ContentTypeEnum::BOOK, 'is_adult' => false],
            ['name' => 'non-fiction_for_children', 'category' => ContentTypeEnum::BOOK, 'is_adult' => false],
            ['name' => 'graphic_novel', 'category' => ContentTypeEnum::BOOK, 'is_adult' => false],
            ['name' => 'novella', 'category' => ContentTypeEnum::BOOK, 'is_adult' => false],
            ['name' => 'paranormal', 'category' => ContentTypeEnum::BOOK, 'is_adult' => false],
            ['name' => 'plays_Scripts', 'category' => ContentTypeEnum::BOOK, 'is_adult' => false],
            ['name' => 'poetry', 'category' => ContentTypeEnum::BOOK, 'is_adult' => false],
            ['name' => 'detective', 'category' => ContentTypeEnum::BOOK, 'is_adult' => false],
            ['name' => 'post-apocalyptic', 'category' => ContentTypeEnum::BOOK, 'is_adult' => false],
            ['name' => 'project', 'category' => ContentTypeEnum::BOOK, 'is_adult' => false],
            ['name' => 'non-fiction_comics', 'category' => ContentTypeEnum::BOOK, 'is_adult' => false],
            ['name' => 'religion_spirituality', 'category' => ContentTypeEnum::BOOK, 'is_adult' => false],
            ['name' => 'historical_romance', 'category' => ContentTypeEnum::BOOK, 'is_adult' => false],
            ['name' => 'romance', 'category' => ContentTypeEnum::BOOK, 'is_adult' => false],
            ['name' => 'health_wellness', 'category' => ContentTypeEnum::BOOK, 'is_adult' => false],
            ['name' => 'sex_relationships', 'category' => ContentTypeEnum::BOOK, 'is_adult' => true],
            ['name' => 'surreal', 'category' => ContentTypeEnum::BOOK, 'is_adult' => false],
            ['name' => 'technology', 'category' => ContentTypeEnum::BOOK, 'is_adult' => false],
            ['name' => 'thriller_suspense', 'category' => ContentTypeEnum::BOOK, 'is_adult' => false],
        ]);
    }
}
