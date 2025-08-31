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
            ['name' => 'action', 'category' => ContentTypeEnum::GAME],
            ['name' => 'anime', 'category' => ContentTypeEnum::GAME],
            ['name' => 'arcade_rhythm', 'category' => ContentTypeEnum::GAME],
            ['name' => 'adventure', 'category' => ContentTypeEnum::GAME],
            ['name' => 'battle_royale', 'category' => ContentTypeEnum::GAME],
            ['name' => 'good_story', 'category' => ContentTypeEnum::GAME],
            ['name' => 'card_game', 'category' => ContentTypeEnum::GAME],
            ['name' => 'casual', 'category' => ContentTypeEnum::GAME],
            ['name' => 'competitive_online', 'category' => ContentTypeEnum::GAME],
            ['name' => 'building_automation', 'category' => ContentTypeEnum::GAME],
            ['name' => 'cooperative', 'category' => ContentTypeEnum::GAME],
            ['name' => 'racing', 'category' => ContentTypeEnum::GAME],
            ['name' => 'educational', 'category' => ContentTypeEnum::GAME],
            ['name' => 'jobs_hobbies', 'category' => ContentTypeEnum::GAME],
            ['name' => 'dating', 'category' => ContentTypeEnum::GAME],
            ['name' => 'space', 'category' => ContentTypeEnum::GAME],
            ['name' => 'space_aviation', 'category' => ContentTypeEnum::GAME],
            ['name' => 'sports', 'category' => ContentTypeEnum::GAME],
            ['name' => 'turn-based_strategy', 'category' => ContentTypeEnum::GAME],
            ['name' => 'strategy', 'category' => ContentTypeEnum::GAME],
            ['name' => 'science_fiction_cyberpunk', 'category' => ContentTypeEnum::GAME],
            ['name' => 'fighting', 'category' => ContentTypeEnum::GAME],
            ['name' => 'gacha', 'category' => ContentTypeEnum::GAME],
            ['name' => 'hack_and_slash', 'category' => ContentTypeEnum::GAME],
            ['name' => 'survival_horror', 'category' => ContentTypeEnum::GAME],
            ['name' => 'idle_games', 'category' => ContentTypeEnum::GAME],
            ['name' => 'jrpg', 'category' => ContentTypeEnum::GAME],
            ['name' => 'fighting_martial_arts', 'category' => ContentTypeEnum::GAME],
            ['name' => 'metroidvania', 'category' => ContentTypeEnum::GAME],
            ['name' => 'military', 'category' => ContentTypeEnum::GAME],
            ['name' => 'mystery_investigation', 'category' => ContentTypeEnum::GAME],
            ['name' => 'mmo', 'category' => ContentTypeEnum::GAME],
            ['name' => 'moba', 'category' => ContentTypeEnum::GAME],
            ['name' => 'local_party_multiplayer', 'category' => ContentTypeEnum::GAME],
            ['name' => 'multiplayer', 'category' => ContentTypeEnum::GAME],
            ['name' => 'open_world', 'category' => ContentTypeEnum::GAME],
            ['name' => 'musical_rhythm', 'category' => ContentTypeEnum::GAME],
            ['name' => 'hidden_object', 'category' => ContentTypeEnum::GAME],
            ['name' => 'party_game', 'category' => ContentTypeEnum::GAME],
            ['name' => 'fishing_hunting', 'category' => ContentTypeEnum::GAME],
            ['name' => 'platformer', 'category' => ContentTypeEnum::GAME],
            ['name' => 'endless_platformer_runner', 'category' => ContentTypeEnum::GAME],
            ['name' => 'puzzle', 'category' => ContentTypeEnum::GAME],
            ['name' => 'augmented_reality', 'category' => ContentTypeEnum::GAME],
            ['name' => 'virtual_reality', 'category' => ContentTypeEnum::GAME],
            ['name' => 'roguelike', 'category' => ContentTypeEnum::GAME],
            ['name' => 'party_rpg', 'category' => ContentTypeEnum::GAME],
            ['name' => 'rpg', 'category' => ContentTypeEnum::GAME],
            ['name' => 'sandbox', 'category' => ContentTypeEnum::GAME],
            ['name' => 'simulation', 'category' => ContentTypeEnum::GAME],
            ['name' => 'racing_simulator', 'category' => ContentTypeEnum::GAME],
            ['name' => 'sports_simulator', 'category' => ContentTypeEnum::GAME],
            ['name' => 'survival', 'category' => ContentTypeEnum::GAME],
            ['name' => 'adults_only', 'category' => ContentTypeEnum::GAME],
            ['name' => 'stealth', 'category' => ContentTypeEnum::GAME],
            ['name' => 'psychological_horror', 'category' => ContentTypeEnum::GAME],
            ['name' => 'horror', 'category' => ContentTypeEnum::GAME],
            ['name' => 'first-person_shooter', 'category' => ContentTypeEnum::GAME],
            ['name' => 'Third-person_shooter', 'category' => ContentTypeEnum::GAME],
            ['name' => 'tower_defense', 'category' => ContentTypeEnum::GAME],
            ['name' => 'trivia', 'category' => ContentTypeEnum::GAME],
            ['name' => 'tycoon_management', 'category' => ContentTypeEnum::GAME],
            ['name' => 'single_player', 'category' => ContentTypeEnum::GAME],
            ['name' => 'visual_novel', 'category' => ContentTypeEnum::GAME],
        ]);
    }
}
