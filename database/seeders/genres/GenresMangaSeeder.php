<?php

namespace Database\Seeders\Genres;

use App\Enums\ContentTypeEnum;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenresMangaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('genres')->insert([
            ['genre' => 'action', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'martial_arts', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'adventure', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'comedy', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'crime', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'crossdressing', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'cyberpunk', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'delinquents', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'demons', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'drama', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'ecchi', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'sports', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'fantasy', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'ghosts', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'science_fiction', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'philosophical', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'game_vr', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'gore', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'gourmet', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'war', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'gyaru', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'harem', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'hentai', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'historical', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'psychological_horror', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'horror', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'incest', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'isekai', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'iyashikei', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'josei', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'kodomo', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'light Novel', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'loli', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'mafia', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'magic', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'mahou_shoujo', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'mecha', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'medical', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'military', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'mystery', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'monster_girls', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'monsters', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'music', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'ninjas', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'parody', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'police', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'post-apocalyptic', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'psychological', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'teverse_harem', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'school_romance', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'romance', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'samurai', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'seinen', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'shota', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'shoujo', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'shoujo-ai', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'shounen', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'shounen-ai', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'slice_of_life', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'supernatural', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'survival', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'space_opera', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'superhero', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'suspense', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'office_workers', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'tragedy', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'genderswap', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'school_life', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'sexual_violence', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'yaoi', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'yuri', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'zombie', 'category' => ContentTypeEnum::MANGA],
        ]);
    }
}
