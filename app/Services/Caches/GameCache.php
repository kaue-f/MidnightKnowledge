<?php

namespace App\Services\Caches;

use App\Models\Genre;
use App\Models\Game\Game;
use App\Models\Game\Platform;
use App\Enums\ContentTypeEnum;

class GameCache extends BaseCache
{
    protected string $genreKey = 'gameGenres';
    protected string $platformKey = 'platforms';
    protected string $developerKey = 'developers';

    public function getDevelopers()
    {
        return $this->remember(
            key: $this->developerKey,
            callback: fn() =>
            Game::selectRaw('TRIM(developed_by) AS id, TRIM(developed_by) AS name')
                ->whereRaw("TRIM(developed_by) <> ''")
                ->groupByRaw('TRIM(developed_by)')
                ->orderByRaw('TRIM(developed_by)')
                ->get()->toArray()
        );
    }

    public function getGenres()
    {
        $this->ttl = now()->diffInSeconds(now()->addMonth());

        return $this->remember(
            key: $this->genreKey,
            callback: fn() => Genre::where('category', ContentTypeEnum::GAME)
                ->orderBy('name')
                ->get()
        );
    }

    public function getPlatforms()
    {
        $this->ttl = now()->diffInSeconds(now()->addMonth());

        return $this->remember(
            key: $this->platformKey,
            callback: fn() => Platform::all()->toArray()
        );
    }

    public function clearDevelopers()
    {
        $this->forget(key: $this->developerKey);
    }
}
