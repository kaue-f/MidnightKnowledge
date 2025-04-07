<?php

namespace App\Services\Cache;

use Illuminate\Support\Facades\Cache;

abstract class BaseCache
{
    protected int $ttl = 3600;

    protected function remember(string $key, \Closure $callback)
    {
        return Cache::remember($key, $this->ttl, $callback);
    }

    protected function forget(string $key)
    {
        return Cache::forget($key);
    }
}
