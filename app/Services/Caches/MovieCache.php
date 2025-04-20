<?php

namespace App\Services\Caches;

use App\Models\Genre;
use App\Enums\ContentType;

class MovieCache extends BaseCache
{
    protected string $key = 'movie_serieGenres';

    public function getGenres()
    {
        return $this->remember(
            key: $this->key,
            callback: fn() => Genre::where('category', ContentType::MOVIE_SERIE)
                ->orderBy('genre')
                ->get()
        );
    }
}
