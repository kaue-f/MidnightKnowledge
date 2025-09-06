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
            ['name' => 'action', 'category' => ContentTypeEnum::GAME, 'is_adult' => false],
            ['name' => 'anime', 'category' => ContentTypeEnum::GAME, 'is_adult' => false],
            ['name' => 'arcade_rhythm', 'category' => ContentTypeEnum::GAME, 'is_adult' => false],
            ['name' => 'adventure', 'category' => ContentTypeEnum::GAME, 'is_adult' => false],
            ['name' => 'battle_royale', 'category' => ContentTypeEnum::GAME, 'is_adult' => false],
            ['name' => 'good_story', 'category' => ContentTypeEnum::GAME, 'is_adult' => false],
            ['name' => 'card_game', 'category' => ContentTypeEnum::GAME, 'is_adult' => false],
            ['name' => 'casual', 'category' => ContentTypeEnum::GAME, 'is_adult' => false],
            ['name' => 'competitive_online', 'category' => ContentTypeEnum::GAME, 'is_adult' => false],
            ['name' => 'building_automation', 'category' => ContentTypeEnum::GAME, 'is_adult' => false],
            ['name' => 'cooperative', 'category' => ContentTypeEnum::GAME, 'is_adult' => false],
            ['name' => 'racing', 'category' => ContentTypeEnum::GAME, 'is_adult' => false],
            ['name' => 'educational', 'category' => ContentTypeEnum::GAME, 'is_adult' => false],
            ['name' => 'jobs_hobbies', 'category' => ContentTypeEnum::GAME, 'is_adult' => false],
            ['name' => 'dating', 'category' => ContentTypeEnum::GAME, 'is_adult' => false],
            ['name' => 'space', 'category' => ContentTypeEnum::GAME, 'is_adult' => false],
            ['name' => 'space_aviation', 'category' => ContentTypeEnum::GAME, 'is_adult' => false],
            ['name' => 'sports', 'category' => ContentTypeEnum::GAME, 'is_adult' => false],
            ['name' => 'turn-based_strategy', 'category' => ContentTypeEnum::GAME, 'is_adult' => false],
            ['name' => 'strategy', 'category' => ContentTypeEnum::GAME, 'is_adult' => false],
            ['name' => 'science_fiction_cyberpunk', 'category' => ContentTypeEnum::GAME, 'is_adult' => false],
            ['name' => 'fighting', 'category' => ContentTypeEnum::GAME, 'is_adult' => false],
            ['name' => 'gacha', 'category' => ContentTypeEnum::GAME, 'is_adult' => false],
            ['name' => 'hack_and_slash', 'category' => ContentTypeEnum::GAME, 'is_adult' => false],
            ['name' => 'survival_horror', 'category' => ContentTypeEnum::GAME, 'is_adult' => false],
            ['name' => 'idle_games', 'category' => ContentTypeEnum::GAME, 'is_adult' => false],
            ['name' => 'jrpg', 'category' => ContentTypeEnum::GAME, 'is_adult' => false],
            ['name' => 'fighting_martial_arts', 'category' => ContentTypeEnum::GAME, 'is_adult' => false],
            ['name' => 'metroidvania', 'category' => ContentTypeEnum::GAME, 'is_adult' => false],
            ['name' => 'military', 'category' => ContentTypeEnum::GAME, 'is_adult' => false],
            ['name' => 'mystery_investigation', 'category' => ContentTypeEnum::GAME, 'is_adult' => false],
            ['name' => 'mmo', 'category' => ContentTypeEnum::GAME, 'is_adult' => false],
            ['name' => 'moba', 'category' => ContentTypeEnum::GAME, 'is_adult' => false],
            ['name' => 'local_party_multiplayer', 'category' => ContentTypeEnum::GAME, 'is_adult' => false],
            ['name' => 'multiplayer', 'category' => ContentTypeEnum::GAME, 'is_adult' => false],
            ['name' => 'open_world', 'category' => ContentTypeEnum::GAME, 'is_adult' => false],
            ['name' => 'musical_rhythm', 'category' => ContentTypeEnum::GAME, 'is_adult' => false],
            ['name' => 'hidden_object', 'category' => ContentTypeEnum::GAME, 'is_adult' => false],
            ['name' => 'party_game', 'category' => ContentTypeEnum::GAME, 'is_adult' => false],
            ['name' => 'fishing_hunting', 'category' => ContentTypeEnum::GAME, 'is_adult' => false],
            ['name' => 'platformer', 'category' => ContentTypeEnum::GAME, 'is_adult' => false],
            ['name' => 'endless_platformer_runner', 'category' => ContentTypeEnum::GAME, 'is_adult' => false],
            ['name' => 'puzzle', 'category' => ContentTypeEnum::GAME, 'is_adult' => false],
            ['name' => 'augmented_reality', 'category' => ContentTypeEnum::GAME, 'is_adult' => false],
            ['name' => 'virtual_reality', 'category' => ContentTypeEnum::GAME, 'is_adult' => false],
            ['name' => 'roguelike', 'category' => ContentTypeEnum::GAME, 'is_adult' => false],
            ['name' => 'party_rpg', 'category' => ContentTypeEnum::GAME, 'is_adult' => false],
            ['name' => 'rpg', 'category' => ContentTypeEnum::GAME, 'is_adult' => false],
            ['name' => 'sandbox', 'category' => ContentTypeEnum::GAME, 'is_adult' => false],
            ['name' => 'simulation', 'category' => ContentTypeEnum::GAME, 'is_adult' => false],
            ['name' => 'racing_simulator', 'category' => ContentTypeEnum::GAME, 'is_adult' => false],
            ['name' => 'sports_simulator', 'category' => ContentTypeEnum::GAME, 'is_adult' => false],
            ['name' => 'survival', 'category' => ContentTypeEnum::GAME, 'is_adult' => false],
            ['name' => 'adults_only', 'category' => ContentTypeEnum::GAME, 'is_adult' => true],
            ['name' => 'stealth', 'category' => ContentTypeEnum::GAME, 'is_adult' => false],
            ['name' => 'psychological_horror', 'category' => ContentTypeEnum::GAME, 'is_adult' => false],
            ['name' => 'horror', 'category' => ContentTypeEnum::GAME, 'is_adult' => false],
            ['name' => 'first-person_shooter', 'category' => ContentTypeEnum::GAME, 'is_adult' => false],
            ['name' => 'Third-person_shooter', 'category' => ContentTypeEnum::GAME, 'is_adult' => false],
            ['name' => 'tower_defense', 'category' => ContentTypeEnum::GAME, 'is_adult' => false],
            ['name' => 'trivia', 'category' => ContentTypeEnum::GAME, 'is_adult' => false],
            ['name' => 'tycoon_management', 'category' => ContentTypeEnum::GAME, 'is_adult' => false],
            ['name' => 'single_player', 'category' => ContentTypeEnum::GAME, 'is_adult' => false],
            ['name' => 'visual_novel', 'category' => ContentTypeEnum::GAME, 'is_adult' => false],
        ]);
    }
}
