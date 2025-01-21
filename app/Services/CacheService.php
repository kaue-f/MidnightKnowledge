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

    public function getGenres(string $content)
    {
        $genres =  Cache::remember('genres', 3600, function () {
            return Genre::orderBy('genre')->get();
        });
        return $genres->where('category',  $content)->toArray();
    }
}
