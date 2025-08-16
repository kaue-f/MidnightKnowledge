<?php

namespace App\Services\Caches;

use App\Models\Genre;
use App\Enums\ContentTypeEnum;
use App\Models\Anime\AnimeType;

class AnimeCache extends BaseCache
{
    protected string $genreKey = 'animeGenres';
    protected string $typeKey = 'animeTypes';

    public function getGenres()
    {
        return $this->remember(
            key: $this->genreKey,
            callback: fn() => Genre::where('category', ContentTypeEnum::ANIME)
                ->orderBy('genre')
                ->get()
        );
    }

    public function getTypes()
    {
        return $this->remember(
            key: $this->typeKey,
            callback: fn() => AnimeType::all()->toArray()
        );
    }
}
