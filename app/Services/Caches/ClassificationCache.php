<?php

namespace App\Services\Caches;

use App\Models\Classification;

class ClassificationCache extends BaseCache
{
    protected string $key = 'classifications';

    public function fetch()
    {
        return $this->remember(
            key: $this->key,
            callback: function () {
                $this->ttl = now()->addMonth()->diffInSeconds();
                return Classification::all()->toArray();
            }
        );
    }

    public function clear()
    {
        $this->forget(key: $this->key);
    }
}
