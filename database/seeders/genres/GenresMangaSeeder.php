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
            ['name' => 'action', 'category' => ContentTypeEnum::MANGA],
            ['name' => 'martial_arts', 'category' => ContentTypeEnum::MANGA],
            ['name' => 'adventure', 'category' => ContentTypeEnum::MANGA],
            ['name' => 'comedy', 'category' => ContentTypeEnum::MANGA],
            ['name' => 'crime', 'category' => ContentTypeEnum::MANGA],
            ['name' => 'crossdressing', 'category' => ContentTypeEnum::MANGA],
            ['name' => 'cyberpunk', 'category' => ContentTypeEnum::MANGA],
            ['name' => 'delinquents', 'category' => ContentTypeEnum::MANGA],
            ['name' => 'demons', 'category' => ContentTypeEnum::MANGA],
            ['name' => 'drama', 'category' => ContentTypeEnum::MANGA],
            ['name' => 'ecchi', 'category' => ContentTypeEnum::MANGA],
            ['name' => 'sports', 'category' => ContentTypeEnum::MANGA],
            ['name' => 'fantasy', 'category' => ContentTypeEnum::MANGA],
            ['name' => 'ghosts', 'category' => ContentTypeEnum::MANGA],
            ['name' => 'science_fiction', 'category' => ContentTypeEnum::MANGA],
            ['name' => 'philosophical', 'category' => ContentTypeEnum::MANGA],
            ['name' => 'game_vr', 'category' => ContentTypeEnum::MANGA],
            ['name' => 'gore', 'category' => ContentTypeEnum::MANGA],
            ['name' => 'gourmet', 'category' => ContentTypeEnum::MANGA],
            ['name' => 'war', 'category' => ContentTypeEnum::MANGA],
            ['name' => 'gyaru', 'category' => ContentTypeEnum::MANGA],
            ['name' => 'harem', 'category' => ContentTypeEnum::MANGA],
            ['name' => 'hentai', 'category' => ContentTypeEnum::MANGA],
            ['name' => 'historical', 'category' => ContentTypeEnum::MANGA],
            ['name' => 'psychological_horror', 'category' => ContentTypeEnum::MANGA],
            ['name' => 'horror', 'category' => ContentTypeEnum::MANGA],
            ['name' => 'incest', 'category' => ContentTypeEnum::MANGA],
            ['name' => 'isekai', 'category' => ContentTypeEnum::MANGA],
            ['name' => 'iyashikei', 'category' => ContentTypeEnum::MANGA],
            ['name' => 'josei', 'category' => ContentTypeEnum::MANGA],
            ['name' => 'kodomo', 'category' => ContentTypeEnum::MANGA],
            ['name' => 'light Novel', 'category' => ContentTypeEnum::MANGA],
            ['name' => 'loli', 'category' => ContentTypeEnum::MANGA],
            ['name' => 'mafia', 'category' => ContentTypeEnum::MANGA],
            ['name' => 'magic', 'category' => ContentTypeEnum::MANGA],
            ['name' => 'mahou_shoujo', 'category' => ContentTypeEnum::MANGA],
            ['name' => 'mecha', 'category' => ContentTypeEnum::MANGA],
            ['name' => 'medical', 'category' => ContentTypeEnum::MANGA],
            ['name' => 'military', 'category' => ContentTypeEnum::MANGA],
            ['name' => 'mystery', 'category' => ContentTypeEnum::MANGA],
            ['name' => 'monster_girls', 'category' => ContentTypeEnum::MANGA],
            ['name' => 'monsters', 'category' => ContentTypeEnum::MANGA],
            ['name' => 'music', 'category' => ContentTypeEnum::MANGA],
            ['name' => 'ninjas', 'category' => ContentTypeEnum::MANGA],
            ['name' => 'parody', 'category' => ContentTypeEnum::MANGA],
            ['name' => 'police', 'category' => ContentTypeEnum::MANGA],
            ['name' => 'post-apocalyptic', 'category' => ContentTypeEnum::MANGA],
            ['name' => 'psychological', 'category' => ContentTypeEnum::MANGA],
            ['name' => 'teverse_harem', 'category' => ContentTypeEnum::MANGA],
            ['name' => 'school_romance', 'category' => ContentTypeEnum::MANGA],
            ['name' => 'romance', 'category' => ContentTypeEnum::MANGA],
            ['name' => 'samurai', 'category' => ContentTypeEnum::MANGA],
            ['name' => 'seinen', 'category' => ContentTypeEnum::MANGA],
            ['name' => 'shota', 'category' => ContentTypeEnum::MANGA],
            ['name' => 'shoujo', 'category' => ContentTypeEnum::MANGA],
            ['name' => 'shoujo-ai', 'category' => ContentTypeEnum::MANGA],
            ['name' => 'shounen', 'category' => ContentTypeEnum::MANGA],
            ['name' => 'shounen-ai', 'category' => ContentTypeEnum::MANGA],
            ['name' => 'slice_of_life', 'category' => ContentTypeEnum::MANGA],
            ['name' => 'supernatural', 'category' => ContentTypeEnum::MANGA],
            ['name' => 'survival', 'category' => ContentTypeEnum::MANGA],
            ['name' => 'space_opera', 'category' => ContentTypeEnum::MANGA],
            ['name' => 'superhero', 'category' => ContentTypeEnum::MANGA],
            ['name' => 'suspense', 'category' => ContentTypeEnum::MANGA],
            ['name' => 'office_workers', 'category' => ContentTypeEnum::MANGA],
            ['name' => 'tragedy', 'category' => ContentTypeEnum::MANGA],
            ['name' => 'genderswap', 'category' => ContentTypeEnum::MANGA],
            ['name' => 'school_life', 'category' => ContentTypeEnum::MANGA],
            ['name' => 'sexual_violence', 'category' => ContentTypeEnum::MANGA],
            ['name' => 'yaoi', 'category' => ContentTypeEnum::MANGA],
            ['name' => 'yuri', 'category' => ContentTypeEnum::MANGA],
            ['name' => 'zombie', 'category' => ContentTypeEnum::MANGA],
        ]);
    }
}
