<?php

namespace App\Services\Caches;

use App\Models\Genre;
use App\Enums\ContentType;

class GenreCache extends BaseCache
{
    protected string $key = 'genres';
    protected string $movie_serieKey = 'movie_serieGenres';

    public function getGenres()
    {
        return $this->remember(
            key: 'genres',
            callback: fn() => Genre::select('id', 'genre')
                ->orderBy('genre')
                ->get()
                ->groupBy('genre')
                ->map(function ($items, $genreName) {
                    return [
                        'id' => $items->pluck('id')->implode(','),
                        'genre' => $genreName
                    ];
                })
                ->values()
        );
    }

    public function getMovieSerieGenres()
    {
        return $this->remember(
            key: $this->movie_serieKey,
            callback: fn() => Genre::where('category', ContentType::MOVIE_SERIE)
                ->orderBy('genre')
                ->get()
        );
    }
}
