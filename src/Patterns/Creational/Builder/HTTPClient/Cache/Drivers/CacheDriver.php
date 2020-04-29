<?php
namespace App\Patterns\Creational\Builder\HTTPClient\Cache\Drivers;

interface CacheDriver
{
    public function connect(): bool;

    /**
     * @return mixed a resource should be returned
     */
    public function read();

    public function persist(string $data): bool;
}