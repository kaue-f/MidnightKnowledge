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
            ['name' => 'action', 'category' => ContentTypeEnum::MANGA, 'is_adult' => false],
            ['name' => 'martial_arts', 'category' => ContentTypeEnum::MANGA, 'is_adult' => false],
            ['name' => 'adventure', 'category' => ContentTypeEnum::MANGA, 'is_adult' => false],
            ['name' => 'comedy', 'category' => ContentTypeEnum::MANGA, 'is_adult' => false],
            ['name' => 'crime', 'category' => ContentTypeEnum::MANGA, 'is_adult' => false],
            ['name' => 'crossdressing', 'category' => ContentTypeEnum::MANGA, 'is_adult' => false],
            ['name' => 'cyberpunk', 'category' => ContentTypeEnum::MANGA, 'is_adult' => false],
            ['name' => 'delinquents', 'category' => ContentTypeEnum::MANGA, 'is_adult' => false],
            ['name' => 'demons', 'category' => ContentTypeEnum::MANGA, 'is_adult' => false],
            ['name' => 'drama', 'category' => ContentTypeEnum::MANGA, 'is_adult' => false],
            ['name' => 'ecchi', 'category' => ContentTypeEnum::MANGA, 'is_adult' => false],
            ['name' => 'sports', 'category' => ContentTypeEnum::MANGA, 'is_adult' => false],
            ['name' => 'fantasy', 'category' => ContentTypeEnum::MANGA, 'is_adult' => false],
            ['name' => 'ghosts', 'category' => ContentTypeEnum::MANGA, 'is_adult' => false],
            ['name' => 'science_fiction', 'category' => ContentTypeEnum::MANGA, 'is_adult' => false],
            ['name' => 'philosophical', 'category' => ContentTypeEnum::MANGA, 'is_adult' => false],
            ['name' => 'game_vr', 'category' => ContentTypeEnum::MANGA, 'is_adult' => false],
            ['name' => 'gore', 'category' => ContentTypeEnum::MANGA, 'is_adult' => true],
            ['name' => 'gourmet', 'category' => ContentTypeEnum::MANGA, 'is_adult' => false],
            ['name' => 'war', 'category' => ContentTypeEnum::MANGA, 'is_adult' => false],
            ['name' => 'gyaru', 'category' => ContentTypeEnum::MANGA, 'is_adult' => false],
            ['name' => 'harem', 'category' => ContentTypeEnum::MANGA, 'is_adult' => false],
            ['name' => 'hentai', 'category' => ContentTypeEnum::MANGA, 'is_adult' => true],
            ['name' => 'historical', 'category' => ContentTypeEnum::MANGA, 'is_adult' => false],
            ['name' => 'psychological_horror', 'category' => ContentTypeEnum::MANGA, 'is_adult' => false],
            ['name' => 'horror', 'category' => ContentTypeEnum::MANGA, 'is_adult' => false],
            ['name' => 'incest', 'category' => ContentTypeEnum::MANGA, 'is_adult' => true],
            ['name' => 'isekai', 'category' => ContentTypeEnum::MANGA, 'is_adult' => false],
            ['name' => 'iyashikei', 'category' => ContentTypeEnum::MANGA, 'is_adult' => false],
            ['name' => 'josei', 'category' => ContentTypeEnum::MANGA, 'is_adult' => false],
            ['name' => 'kodomo', 'category' => ContentTypeEnum::MANGA, 'is_adult' => false],
            ['name' => 'light Novel', 'category' => ContentTypeEnum::MANGA, 'is_adult' => false],
            ['name' => 'loli', 'category' => ContentTypeEnum::MANGA, 'is_adult' => true],
            ['name' => 'mafia', 'category' => ContentTypeEnum::MANGA, 'is_adult' => false],
            ['name' => 'magic', 'category' => ContentTypeEnum::MANGA, 'is_adult' => false],
            ['name' => 'mahou_shoujo', 'category' => ContentTypeEnum::MANGA, 'is_adult' => false],
            ['name' => 'mecha', 'category' => ContentTypeEnum::MANGA, 'is_adult' => false],
            ['name' => 'medical', 'category' => ContentTypeEnum::MANGA, 'is_adult' => false],
            ['name' => 'military', 'category' => ContentTypeEnum::MANGA, 'is_adult' => false],
            ['name' => 'mystery', 'category' => ContentTypeEnum::MANGA, 'is_adult' => false],
            ['name' => 'monster_girls', 'category' => ContentTypeEnum::MANGA, 'is_adult' => false],
            ['name' => 'monsters', 'category' => ContentTypeEnum::MANGA, 'is_adult' => false],
            ['name' => 'music', 'category' => ContentTypeEnum::MANGA, 'is_adult' => false],
            ['name' => 'ninjas', 'category' => ContentTypeEnum::MANGA, 'is_adult' => false],
            ['name' => 'parody', 'category' => ContentTypeEnum::MANGA, 'is_adult' => false],
            ['name' => 'police', 'category' => ContentTypeEnum::MANGA, 'is_adult' => false],
            ['name' => 'post-apocalyptic', 'category' => ContentTypeEnum::MANGA, 'is_adult' => false],
            ['name' => 'psychological', 'category' => ContentTypeEnum::MANGA, 'is_adult' => false],
            ['name' => 'teverse_harem', 'category' => ContentTypeEnum::MANGA, 'is_adult' => false],
            ['name' => 'school_romance', 'category' => ContentTypeEnum::MANGA, 'is_adult' => false],
            ['name' => 'romance', 'category' => ContentTypeEnum::MANGA, 'is_adult' => false],
            ['name' => 'samurai', 'category' => ContentTypeEnum::MANGA, 'is_adult' => false],
            ['name' => 'seinen', 'category' => ContentTypeEnum::MANGA, 'is_adult' => false],
            ['name' => 'shota', 'category' => ContentTypeEnum::MANGA, 'is_adult' => false],
            ['name' => 'shoujo', 'category' => ContentTypeEnum::MANGA, 'is_adult' => false],
            ['name' => 'shoujo-ai', 'category' => ContentTypeEnum::MANGA, 'is_adult' => false],
            ['name' => 'shounen', 'category' => ContentTypeEnum::MANGA, 'is_adult' => false],
            ['name' => 'shounen-ai', 'category' => ContentTypeEnum::MANGA, 'is_adult' => false],
            ['name' => 'slice_of_life', 'category' => ContentTypeEnum::MANGA, 'is_adult' => false],
            ['name' => 'supernatural', 'category' => ContentTypeEnum::MANGA, 'is_adult' => false],
            ['name' => 'survival', 'category' => ContentTypeEnum::MANGA, 'is_adult' => false],
            ['name' => 'space_opera', 'category' => ContentTypeEnum::MANGA, 'is_adult' => false],
            ['name' => 'superhero', 'category' => ContentTypeEnum::MANGA, 'is_adult' => false],
            ['name' => 'suspense', 'category' => ContentTypeEnum::MANGA, 'is_adult' => false],
            ['name' => 'office_workers', 'category' => ContentTypeEnum::MANGA, 'is_adult' => false],
            ['name' => 'tragedy', 'category' => ContentTypeEnum::MANGA, 'is_adult' => false],
            ['name' => 'genderswap', 'category' => ContentTypeEnum::MANGA, 'is_adult' => false],
            ['name' => 'school_life', 'category' => ContentTypeEnum::MANGA, 'is_adult' => false],
            ['name' => 'sexual_violence', 'category' => ContentTypeEnum::MANGA, 'is_adult' => true],
            ['name' => 'yaoi', 'category' => ContentTypeEnum::MANGA, 'is_adult' => true],
            ['name' => 'yuri', 'category' => ContentTypeEnum::MANGA, 'is_adult' => true],
            ['name' => 'zombie', 'category' => ContentTypeEnum::MANGA, 'is_adult' => false],
        ]);
    }
}
