<?php

namespace App\Services\Cache;

use App\Models\Genre;
use App\Enums\ContentType;
use App\Models\Anime\AnimeType;

class AnimeCache extends BaseCache
{
    protected string $genreKey = 'animeGenres';
    protected string $typeKey = 'animeTypes';
    public function getGenres()
    {
        return $this->remember($this->genreKey,  function () {
            return Genre::where('category', ContentType::ANIME)
                ->orderBy('genre')
                ->get();
        });
    }

    public function getTypes()
    {
        return $this->remember($this->typeKey, function () {
            return AnimeType::all()->toArray();
        });
    }
}
