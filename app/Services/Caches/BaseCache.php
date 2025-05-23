<?php

namespace App\Services\Caches;

use InvalidArgumentException;
use Illuminate\Support\Facades\Cache;

abstract class BaseCache
{
    protected int $ttl = 3600;

    protected function remember(string $key, \Closure $callback): mixed
    {
        return Cache::remember(
            key: $key,
            ttl: $this->validateTtl(ttl: $this->ttl),
            callback: $callback
        );
    }

    protected function get(string $key, mixed $default = null): mixed
    {
        return Cache::get(key: $key, default: $default);
    }

    protected function put(string $key, mixed $value, int|null $seconds = null): bool
    {
        return Cache::put(
            key: $key,
            value: $value,
            ttl: $this->validateTtl(ttl: $seconds ?? $this->ttl)
        );
    }

    protected function forever(string $key, mixed $value): bool
    {
        return Cache::forever(
            key: $key,
            value: $value
        );
    }

    protected function has(string $key): bool
    {
        return Cache::has(key: $key);
    }

    protected function forget(string $key): bool
    {
        return Cache::forget(key: $key);
    }

    protected function validateTtl(int $ttl): int
    {
        if ($ttl < 0) {
            throw new InvalidArgumentException('TTL must be a positive integer');
        }

        return $ttl;
    }
}
