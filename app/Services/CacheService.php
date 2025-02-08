<?php

namespace App\Services;

use App\Models\Genre;
use App\Enums\ContentType;
use App\Models\Game\Platform;
use App\Models\Classification;
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
            return Genre::where('category', ContentType::GAME)->orderBy('genre')->get();
        });
    }

    public function getPlatforms()
    {
        return Cache::remember('platforms', 3600, function () {
            return Platform::all()->toArray();
        });
    }
}
