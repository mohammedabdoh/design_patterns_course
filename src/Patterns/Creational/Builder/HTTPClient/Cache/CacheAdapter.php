<?php
namespace App\Patterns\Creational\Builder\HTTPClient\Cache;

use App\Patterns\Creational\Builder\HTTPClient\Cache\Drivers\CacheDriver;

abstract class CacheAdapter
{
    protected CacheDriver $cacheDriver;

    /**
     * CacheAdapter constructor.
     * @param CacheDriver $cacheDriver
     */
    public function __construct(CacheDriver $cacheDriver)
    {
        $this->cacheDriver = $cacheDriver;
    }

    abstract public function add(string $key, string $value): bool;
    abstract public function hasKey(string $key): bool;
    abstract public function remove(string $key): bool;
    abstract public function purge(): bool;
    abstract public function list(): array;
}