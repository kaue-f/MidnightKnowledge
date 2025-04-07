<?php

namespace App\Services\Cache;

use App\Models\Genre;
use App\Models\Game\Game;
use App\Enums\ContentType;
use App\Models\Game\Platform;

class GameCache extends BaseCache
{
    protected string $genreKey = 'gameGenres';
    protected string $platformKey = 'platforms';
    protected string $developerKey = 'developers';

    public function getDevelopers()
    {
        return $this->remember($this->developerKey,  function () {
            return Game::selectRaw('TRIM(developed_by) AS id, TRIM(developed_by) AS name')
                ->whereRaw("TRIM(developed_by) != ''")
                ->groupByRaw('TRIM(developed_by)')
                ->orderByRaw('TRIM(developed_by)')
                ->get()->toArray();
        });
    }

    public function getGenres()
    {
        return $this->remember($this->genreKey, function () {
            return Genre::where('category', ContentType::GAME)
                ->orderBy('genre')
                ->get();
        });
    }

    public function getPlatforms()
    {
        return $this->remember($this->platformKey,  function () {
            return Platform::all()->toArray();
        });
    }

    public function clearDevelopers()
    {
        $this->forget($this->developerKey);
    }
}
