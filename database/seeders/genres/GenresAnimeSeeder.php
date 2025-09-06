<?php

namespace Database\Seeders\Genres;

use App\Enums\ContentTypeEnum;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenresAnimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('genres')->insert([
            ['name' => '4-koma', 'category' => ContentTypeEnum::ANIME, 'is_adult' => false],
            ['name' => 'action', 'category' => ContentTypeEnum::ANIME, 'is_adult' => false],
            ['name' => 'martial_arts', 'category' => ContentTypeEnum::ANIME, 'is_adult' => false],
            ['name' => 'adventure', 'category' => ContentTypeEnum::ANIME, 'is_adult' => false],
            ['name' => 'biographical', 'category' => ContentTypeEnum::ANIME, 'is_adult' => false],
            ['name' => 'romantic_comedy', 'category' => ContentTypeEnum::ANIME, 'is_adult' => false],
            ['name' => 'comedy', 'category' => ContentTypeEnum::ANIME, 'is_adult' => false],
            ['name' => 'conspiracy', 'category' => ContentTypeEnum::ANIME, 'is_adult' => false],
            ['name' => 'cyberpunk', 'category' => ContentTypeEnum::ANIME, 'is_adult' => false],
            ['name' => 'dance', 'category' => ContentTypeEnum::ANIME, 'is_adult' => false],
            ['name' => 'demon', 'category' => ContentTypeEnum::ANIME, 'is_adult' => false],
            ['name' => 'detective', 'category' => ContentTypeEnum::ANIME, 'is_adult' => false],
            ['name' => 'psychological_drama', 'category' => ContentTypeEnum::ANIME, 'is_adult' => false],
            ['name' => 'drama', 'category' => ContentTypeEnum::ANIME, 'is_adult' => false],
            ['name' => 'ecchi', 'category' => ContentTypeEnum::ANIME, 'is_adult' => false],
            ['name' => 'school', 'category' => ContentTypeEnum::ANIME, 'is_adult' => false],
            ['name' => 'space', 'category' => ContentTypeEnum::ANIME, 'is_adult' => false],
            ['name' => 'sports', 'category' => ContentTypeEnum::ANIME, 'is_adult' => false],
            ['name' => 'fantasy', 'category' => ContentTypeEnum::ANIME, 'is_adult' => false],
            ['name' => 'ghost', 'category' => ContentTypeEnum::ANIME, 'is_adult' => false],
            ['name' => 'science_fiction', 'category' => ContentTypeEnum::ANIME, 'is_adult' => false],
            ['name' => 'game', 'category' => ContentTypeEnum::ANIME, 'is_adult' => false],
            ['name' => 'gore', 'category' => ContentTypeEnum::ANIME, 'is_adult' => true],
            ['name' => 'gourmet', 'category' => ContentTypeEnum::ANIME, 'is_adult' => false],
            ['name' => 'war', 'category' => ContentTypeEnum::ANIME, 'is_adult' => false],
            ['name' => 'harem', 'category' => ContentTypeEnum::ANIME, 'is_adult' => false],
            ['name' => 'hentai', 'category' => ContentTypeEnum::ANIME, 'is_adult' => true],
            ['name' => 'hikikomori', 'category' => ContentTypeEnum::ANIME, 'is_adult' => false],
            ['name' => 'historical', 'category' => ContentTypeEnum::ANIME, 'is_adult' => false],
            ['name' => 'idol', 'category' => ContentTypeEnum::ANIME, 'is_adult' => false],
            ['name' => 'isekai', 'category' => ContentTypeEnum::ANIME, 'is_adult' => false],
            ['name' => 'card_games', 'category' => ContentTypeEnum::ANIME, 'is_adult' => false],
            ['name' => 'josei', 'category' => ContentTypeEnum::ANIME, 'is_adult' => false],
            ['name' => 'kodomo', 'category' => ContentTypeEnum::ANIME, 'is_adult' => false],
            ['name' => 'urban_ledends', 'category' => ContentTypeEnum::ANIME, 'is_adult' => false],
            ['name' => 'magic', 'category' => ContentTypeEnum::ANIME, 'is_adult' => false],
            ['name' => 'mahou_shoujo', 'category' => ContentTypeEnum::ANIME, 'is_adult' => false],
            ['name' => 'mecha', 'category' => ContentTypeEnum::ANIME, 'is_adult' => false],
            ['name' => 'mystery', 'category' => ContentTypeEnum::ANIME, 'is_adult' => false],
            ['name' => 'mythology', 'category' => ContentTypeEnum::ANIME, 'is_adult' => false],
            ['name' => 'virtual_world', 'category' => ContentTypeEnum::ANIME, 'is_adult' => false],
            ['name' => 'music', 'category' => ContentTypeEnum::ANIME, 'is_adult' => false],
            ['name' => 'ninja', 'category' => ContentTypeEnum::ANIME, 'is_adult' => false],
            ['name' => 'parody', 'category' => ContentTypeEnum::ANIME, 'is_adult' => false],
            ['name' => 'police', 'category' => ContentTypeEnum::ANIME, 'is_adult' => false],
            ['name' => 'post-apocalyptic', 'category' => ContentTypeEnum::ANIME, 'is_adult' => false],
            ['name' => 'psychological', 'category' => ContentTypeEnum::ANIME, 'is_adult' => false],
            ['name' => 'psychopathy', 'category' => ContentTypeEnum::ANIME, 'is_adult' => false],
            ['name' => 'school_romance', 'category' => ContentTypeEnum::ANIME, 'is_adult' => false],
            ['name' => 'tragic_romance', 'category' => ContentTypeEnum::ANIME, 'is_adult' => false],
            ['name' => 'romance', 'category' => ContentTypeEnum::ANIME, 'is_adult' => false],
            ['name' => 'samurai', 'category' => ContentTypeEnum::ANIME, 'is_adult' => false],
            ['name' => 'seinen', 'category' => ContentTypeEnum::ANIME, 'is_adult' => false],
            ['name' => 'shoujo_ai', 'category' => ContentTypeEnum::ANIME, 'is_adult' => false],
            ['name' => 'shoujo', 'category' => ContentTypeEnum::ANIME, 'is_adult' => false],
            ['name' => 'shounen_ai', 'category' => ContentTypeEnum::ANIME, 'is_adult' => false],
            ['name' => 'shounen', 'category' => ContentTypeEnum::ANIME, 'is_adult' => false],
            ['name' => 'slice_of_life', 'category' => ContentTypeEnum::ANIME, 'is_adult' => false],
            ['name' => 'supernatural', 'category' => ContentTypeEnum::ANIME, 'is_adult' => false],
            ['name' => 'survival', 'category' => ContentTypeEnum::ANIME, 'is_adult' => false],
            ['name' => 'superpowers', 'category' => ContentTypeEnum::ANIME, 'is_adult' => false],
            ['name' => 'surreal', 'category' => ContentTypeEnum::ANIME, 'is_adult' => false],
            ['name' => 'police_suspense', 'category' => ContentTypeEnum::ANIME, 'is_adult' => false],
            ['name' => 'suspense', 'category' => ContentTypeEnum::ANIME, 'is_adult' => false],
            ['name' => 'horror', 'category' => ContentTypeEnum::ANIME, 'is_adult' => false],
            ['name' => 'thriller', 'category' => ContentTypeEnum::ANIME, 'is_adult' => false],
            ['name' => 'tragedy', 'category' => ContentTypeEnum::ANIME, 'is_adult' => false],
            ['name' => 'vampires', 'category' => ContentTypeEnum::ANIME, 'is_adult' => false],
            ['name' => 'time_travel', 'category' => ContentTypeEnum::ANIME, 'is_adult' => false],
            ['name' => 'yaoi', 'category' => ContentTypeEnum::ANIME, 'is_adult' => true],
            ['name' => 'yuri', 'category' => ContentTypeEnum::ANIME, 'is_adult' => true],
            ['name' => 'zombies', 'category' => ContentTypeEnum::ANIME, 'is_adult' => false],
        ]);
    }
}
