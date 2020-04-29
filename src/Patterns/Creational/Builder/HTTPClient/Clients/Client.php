<?php
namespace App\Patterns\Creational\Builder\HTTPClient\Clients;

use App\Patterns\Creational\Builder\HTTPClient\Cache\CacheAdapter;

abstract class Client
{
    protected CacheAdapter $cacheHandler;
    protected Logger $logger;
    protected Reponse $response;
}