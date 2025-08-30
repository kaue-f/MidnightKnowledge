<?php

namespace Database\Seeders\Genres;

use App\Enums\ContentTypeEnum;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenresGameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('genres')->insert([
            ['genre' => 'action', 'category' => ContentTypeEnum::GAME],
            ['genre' => 'anime', 'category' => ContentTypeEnum::GAME],
            ['genre' => 'arcade_rhythm', 'category' => ContentTypeEnum::GAME],
            ['genre' => 'adventure', 'category' => ContentTypeEnum::GAME],
            ['genre' => 'battle_royale', 'category' => ContentTypeEnum::GAME],
            ['genre' => 'good_story', 'category' => ContentTypeEnum::GAME],
            ['genre' => 'card_game', 'category' => ContentTypeEnum::GAME],
            ['genre' => 'casual', 'category' => ContentTypeEnum::GAME],
            ['genre' => 'competitive_online', 'category' => ContentTypeEnum::GAME],
            ['genre' => 'building_automation', 'category' => ContentTypeEnum::GAME],
            ['genre' => 'cooperative', 'category' => ContentTypeEnum::GAME],
            ['genre' => 'racing', 'category' => ContentTypeEnum::GAME],
            ['genre' => 'educational', 'category' => ContentTypeEnum::GAME],
            ['genre' => 'jobs_hobbies', 'category' => ContentTypeEnum::GAME],
            ['genre' => 'dating', 'category' => ContentTypeEnum::GAME],
            ['genre' => 'space', 'category' => ContentTypeEnum::GAME],
            ['genre' => 'space_aviation', 'category' => ContentTypeEnum::GAME],
            ['genre' => 'sports', 'category' => ContentTypeEnum::GAME],
            ['genre' => 'turn-based_strategy', 'category' => ContentTypeEnum::GAME],
            ['genre' => 'strategy', 'category' => ContentTypeEnum::GAME],
            ['genre' => 'science_fiction_cyberpunk', 'category' => ContentTypeEnum::GAME],
            ['genre' => 'fighting', 'category' => ContentTypeEnum::GAME],
            ['genre' => 'gacha', 'category' => ContentTypeEnum::GAME],
            ['genre' => 'hack_and_slash', 'category' => ContentTypeEnum::GAME],
            ['genre' => 'survival_horror', 'category' => ContentTypeEnum::GAME],
            ['genre' => 'idle_games', 'category' => ContentTypeEnum::GAME],
            ['genre' => 'jrpg', 'category' => ContentTypeEnum::GAME],
            ['genre' => 'fighting_martial_arts', 'category' => ContentTypeEnum::GAME],
            ['genre' => 'metroidvania', 'category' => ContentTypeEnum::GAME],
            ['genre' => 'military', 'category' => ContentTypeEnum::GAME],
            ['genre' => 'mystery_investigation', 'category' => ContentTypeEnum::GAME],
            ['genre' => 'mmo', 'category' => ContentTypeEnum::GAME],
            ['genre' => 'moba', 'category' => ContentTypeEnum::GAME],
            ['genre' => 'local_party_multiplayer', 'category' => ContentTypeEnum::GAME],
            ['genre' => 'multiplayer', 'category' => ContentTypeEnum::GAME],
            ['genre' => 'open_world', 'category' => ContentTypeEnum::GAME],
            ['genre' => 'musical_rhythm', 'category' => ContentTypeEnum::GAME],
            ['genre' => 'hidden_object', 'category' => ContentTypeEnum::GAME],
            ['genre' => 'party_game', 'category' => ContentTypeEnum::GAME],
            ['genre' => 'fishing_hunting', 'category' => ContentTypeEnum::GAME],
            ['genre' => 'platformer', 'category' => ContentTypeEnum::GAME],
            ['genre' => 'endless_platformer_runner', 'category' => ContentTypeEnum::GAME],
            ['genre' => 'puzzle', 'category' => ContentTypeEnum::GAME],
            ['genre' => 'augmented_reality', 'category' => ContentTypeEnum::GAME],
            ['genre' => 'virtual_reality', 'category' => ContentTypeEnum::GAME],
            ['genre' => 'roguelike', 'category' => ContentTypeEnum::GAME],
            ['genre' => 'party_rpg', 'category' => ContentTypeEnum::GAME],
            ['genre' => 'rpg', 'category' => ContentTypeEnum::GAME],
            ['genre' => 'sandbox', 'category' => ContentTypeEnum::GAME],
            ['genre' => 'simulation', 'category' => ContentTypeEnum::GAME],
            ['genre' => 'racing_simulator', 'category' => ContentTypeEnum::GAME],
            ['genre' => 'sports_simulator', 'category' => ContentTypeEnum::GAME],
            ['genre' => 'survival', 'category' => ContentTypeEnum::GAME],
            ['genre' => 'adults_only', 'category' => ContentTypeEnum::GAME],
            ['genre' => 'stealth', 'category' => ContentTypeEnum::GAME],
            ['genre' => 'Survival', 'category' => ContentTypeEnum::GAME],
            ['genre' => 'psychological_horror', 'category' => ContentTypeEnum::GAME],
            ['genre' => 'horror', 'category' => ContentTypeEnum::GAME],
            ['genre' => 'first-person_shooter', 'category' => ContentTypeEnum::GAME],
            ['genre' => 'Third-person_shooter', 'category' => ContentTypeEnum::GAME],
            ['genre' => 'tower_defense', 'category' => ContentTypeEnum::GAME],
            ['genre' => 'trivia', 'category' => ContentTypeEnum::GAME],
            ['genre' => 'tycoon_management', 'category' => ContentTypeEnum::GAME],
            ['genre' => 'single_player', 'category' => ContentTypeEnum::GAME],
            ['genre' => 'visual_novel', 'category' => ContentTypeEnum::GAME],
        ]);
    }
}
