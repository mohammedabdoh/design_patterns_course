<?php
namespace App\Patterns\Structural\Proxy\RouterInterface;

use App\Patterns\Structural\Proxy\RouterInterface\RoutingComponents\ConnectionManager;
use App\Patterns\Structural\Proxy\RouterInterface\RoutingComponents\Firewall;
use App\Patterns\Structural\Proxy\RouterInterface\RoutingComponents\Route;
use App\Patterns\Structural\Proxy\RouterInterface\RoutingComponents\RoutingTable;

class RouterFactory
{
    /**
     * @return RouterInterface
     */
    public static function createRouter(): RouterInterface
    {
        $routes = [
            new Route('http://www.google.com', '152.233.22.1'),
            new Route('http://www.abc.com', '93.23.2.232'),
            new Route('http://www.xyz.com', '18.87.198.1'),
        ];

        $table = new RoutingTable($routes);
        $firewall = new Firewall();
        $connectionManager = new ConnectionManager();

        return new Router($connectionManager, $table, $firewall);
    }
}