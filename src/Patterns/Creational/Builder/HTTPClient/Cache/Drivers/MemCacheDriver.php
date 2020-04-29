<?php
namespace App\Patterns\Creational\Builder\HTTPClient\Cache\Drivers;

class MemCacheDriver implements CacheDriver
{

    public function connect(): bool
    {
        return true;
    }

    public function read()
    {
        // TODO: Implement read() method.
    }

    public function persist(string $data): bool
    {
        return true;
    }
}