<?php

namespace App\Services\Caches;

use App\Models\Classification;

class ClassificationCache extends BaseCache
{
    protected string $key = 'classifications';

    public function fetch()
    {
        $this->ttl = now()->diffInSeconds(now()->addMonth());

        return $this->remember(
            key: $this->key,
            callback: fn() => Classification::get()
        );
    }

    public function clear()
    {
        $this->forget(key: $this->key);
    }
}
