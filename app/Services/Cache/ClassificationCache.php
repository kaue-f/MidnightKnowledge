<?php

namespace App\Services\Cache;

use App\Models\Classification;

class ClassificationCache extends BaseCache
{
    protected string $cacheKey = 'classifications';

    public function get()
    {
        return $this->remember($this->cacheKey, function () {
            return Classification::all()->toArray();
        });
    }

    public function clear()
    {
        $this->forget($this->cacheKey);
    }
}
