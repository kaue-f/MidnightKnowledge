<?php

namespace App\Filters;

class AnimeFilter
{
    public function apply($query, array $filters)
    {
        return $query->when(
            $filters['animeType'],
            fn($query) =>
            $query->whereIn('anime_type_id', $filters['animeType'])
        );
    }
}
