<?php

namespace App\Services\Cache;

use App\Models\Genre;
use App\Enums\ContentType;

class AnimeCache extends BaseCache
{
    protected string $genreKey = 'animeGenres';
    public function getGenres()
    {
        return $this->remember($this->genreKey,  function () {
            return Genre::where('category', ContentType::ANIME)
                ->orderBy('genre')
                ->get();
        });
    }
}
