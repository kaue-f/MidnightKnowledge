<?php

namespace App\Services\Cache;

use InvalidArgumentException;
use Illuminate\Support\Facades\Cache;

abstract class BaseCache
{
    protected int $ttl = 3600;

    protected function remember(string $key, \Closure $callback)
    {
        return Cache::remember(
            key: $key,
            ttl: $this->validateTtl($ttl ?? $this->ttl),
            callback: $callback
        );
    }

    protected function forget(string $key): bool
    {
        return Cache::forget($key);
    }

    protected function validateTtl(int $ttl): int
    {
        if ($ttl < 0) {
            throw new InvalidArgumentException('TTL must be a positive integer');
        }

        return $ttl;
    }
}
