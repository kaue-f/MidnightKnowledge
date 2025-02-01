<?php

namespace App\Services;

use App\Models\Classification;
use App\Models\Genre;
use Illuminate\Support\Facades\Cache;

class CacheService
{
    public function getClassifications()
    {
        return Cache::remember('classifications', 3600, function () {
            return Classification::all()->toArray();
        });
    }

    public function getGamesGenre()
    {
        return Cache::remember('gamesGenre', 3600, function () {
            return Genre::where('category', 'Games')->orderBy('genre')->get();
        });
    }
}
