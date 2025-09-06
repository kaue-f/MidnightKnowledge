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
            ['name' => '4-koma', 'category' => ContentTypeEnum::ANIME],
            ['name' => 'action', 'category' => ContentTypeEnum::ANIME],
            ['name' => 'martial_arts', 'category' => ContentTypeEnum::ANIME],
            ['name' => 'adventure', 'category' => ContentTypeEnum::ANIME],
            ['name' => 'biographical', 'category' => ContentTypeEnum::ANIME],
            ['name' => 'romantic_comedy', 'category' => ContentTypeEnum::ANIME],
            ['name' => 'comedy', 'category' => ContentTypeEnum::ANIME],
            ['name' => 'conspiracy', 'category' => ContentTypeEnum::ANIME],
            ['name' => 'cyberpunk', 'category' => ContentTypeEnum::ANIME],
            ['name' => 'dance', 'category' => ContentTypeEnum::ANIME],
            ['name' => 'demon', 'category' => ContentTypeEnum::ANIME],
            ['name' => 'detective', 'category' => ContentTypeEnum::ANIME],
            ['name' => 'psychological_drama', 'category' => ContentTypeEnum::ANIME],
            ['name' => 'drama', 'category' => ContentTypeEnum::ANIME],
            ['name' => 'ecchi', 'category' => ContentTypeEnum::ANIME],
            ['name' => 'school', 'category' => ContentTypeEnum::ANIME],
            ['name' => 'space', 'category' => ContentTypeEnum::ANIME],
            ['name' => 'sports', 'category' => ContentTypeEnum::ANIME],
            ['name' => 'fantasy', 'category' => ContentTypeEnum::ANIME],
            ['name' => 'ghost', 'category' => ContentTypeEnum::ANIME],
            ['name' => 'science_fiction', 'category' => ContentTypeEnum::ANIME],
            ['name' => 'game', 'category' => ContentTypeEnum::ANIME],
            ['name' => 'gore', 'category' => ContentTypeEnum::ANIME],
            ['name' => 'gourmet', 'category' => ContentTypeEnum::ANIME],
            ['name' => 'war', 'category' => ContentTypeEnum::ANIME],
            ['name' => 'harem', 'category' => ContentTypeEnum::ANIME],
            ['name' => 'hentai', 'category' => ContentTypeEnum::ANIME],
            ['name' => 'hikikomori', 'category' => ContentTypeEnum::ANIME],
            ['name' => 'historical', 'category' => ContentTypeEnum::ANIME],
            ['name' => 'idol', 'category' => ContentTypeEnum::ANIME],
            ['name' => 'isekai', 'category' => ContentTypeEnum::ANIME],
            ['name' => 'card_games', 'category' => ContentTypeEnum::ANIME],
            ['name' => 'josei', 'category' => ContentTypeEnum::ANIME],
            ['name' => 'kodomo', 'category' => ContentTypeEnum::ANIME],
            ['name' => 'urban_ledends', 'category' => ContentTypeEnum::ANIME],
            ['name' => 'magic', 'category' => ContentTypeEnum::ANIME],
            ['name' => 'mahou_shoujo', 'category' => ContentTypeEnum::ANIME],
            ['name' => 'mecha', 'category' => ContentTypeEnum::ANIME],
            ['name' => 'mystery', 'category' => ContentTypeEnum::ANIME],
            ['name' => 'mythology', 'category' => ContentTypeEnum::ANIME],
            ['name' => 'virtual_world', 'category' => ContentTypeEnum::ANIME],
            ['name' => 'music', 'category' => ContentTypeEnum::ANIME],
            ['name' => 'ninja', 'category' => ContentTypeEnum::ANIME],
            ['name' => 'parody', 'category' => ContentTypeEnum::ANIME],
            ['name' => 'police', 'category' => ContentTypeEnum::ANIME],
            ['name' => 'post-apocalyptic', 'category' => ContentTypeEnum::ANIME],
            ['name' => 'psychological', 'category' => ContentTypeEnum::ANIME],
            ['name' => 'psychopathy', 'category' => ContentTypeEnum::ANIME],
            ['name' => 'school_romance', 'category' => ContentTypeEnum::ANIME],
            ['name' => 'tragic_romance', 'category' => ContentTypeEnum::ANIME],
            ['name' => 'romance', 'category' => ContentTypeEnum::ANIME],
            ['name' => 'samurai', 'category' => ContentTypeEnum::ANIME],
            ['name' => 'seinen', 'category' => ContentTypeEnum::ANIME],
            ['name' => 'shoujo_ai', 'category' => ContentTypeEnum::ANIME],
            ['name' => 'shoujo', 'category' => ContentTypeEnum::ANIME],
            ['name' => 'shounen_ai', 'category' => ContentTypeEnum::ANIME],
            ['name' => 'shounen', 'category' => ContentTypeEnum::ANIME],
            ['name' => 'slice_of_life', 'category' => ContentTypeEnum::ANIME],
            ['name' => 'supernatural', 'category' => ContentTypeEnum::ANIME],
            ['name' => 'survival', 'category' => ContentTypeEnum::ANIME],
            ['name' => 'superpowers', 'category' => ContentTypeEnum::ANIME],
            ['name' => 'surreal', 'category' => ContentTypeEnum::ANIME],
            ['name' => 'police_suspense', 'category' => ContentTypeEnum::ANIME],
            ['name' => 'suspense', 'category' => ContentTypeEnum::ANIME],
            ['name' => 'horror', 'category' => ContentTypeEnum::ANIME],
            ['name' => 'thriller', 'category' => ContentTypeEnum::ANIME],
            ['name' => 'tragedy', 'category' => ContentTypeEnum::ANIME],
            ['name' => 'vampires', 'category' => ContentTypeEnum::ANIME],
            ['name' => 'time_travel', 'category' => ContentTypeEnum::ANIME],
            ['name' => 'yaoi', 'category' => ContentTypeEnum::ANIME],
            ['name' => 'yuri', 'category' => ContentTypeEnum::ANIME],
            ['name' => 'zombies', 'category' => ContentTypeEnum::ANIME],
        ]);
    }
}
