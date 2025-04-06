<?php

namespace App\Services;

use App\Models\Genre;
use App\Models\Game\Game;
use App\Enums\ContentType;
use App\Models\Game\Platform;
use App\Models\Classification;
use Illuminate\Support\Facades\Cache;

class CacheService
{
    public int $time = 3600;

    public function getClassifications()
    {
        return Cache::remember('classifications', $this->time, function () {
            return Classification::all()->toArray();
        });
    }

    public function getGamesGenre()
    {
        return Cache::remember('gamesGenre', $this->time, function () {
            return Genre::where('category', ContentType::GAME)->orderBy('genre')->get();
        });
    }

    public function getPlatforms()
    {
        return Cache::remember('platforms', $this->time, function () {
            return Platform::all()->toArray();
        });
    }

    public function getDevelopers()
    {
        return Cache::remember('developers', $this->time, function () {
            return Game::selectRaw('developed_by AS id, developed_by AS name')
                ->whereNot('developed_by', '')
                ->groupBy('developed_by')
                ->orderBy('developed_by')
                ->get()->toArray();
        });
    }
}
