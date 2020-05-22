<?php
namespace App\Patterns\Structural\Proxy\RouterInterface;

use App\Patterns\Structural\Proxy\RouterInterface\RoutingComponents\ConnectionManager;
use App\Patterns\Structural\Proxy\RouterInterface\RoutingComponents\Firewall;
use App\Patterns\Structural\Proxy\RouterInterface\RoutingComponents\RoutingTable;

class Router implements RouterInterface
{
    private ConnectionManager $connectionManager;
    private RoutingTable $table;
    private Firewall $firewall;

    /**
     * Router constructor.
     * @param ConnectionManager $connectionManager
     * @param RoutingTable $table
     * @param Firewall $firewall
     */
    public function __construct(
        ConnectionManager $connectionManager,
        RoutingTable $table,
        Firewall $firewall
    ) {
        $this->connectionManager = $connectionManager;
        $this->table = $table;
        $this->firewall = $firewall;
    }

    public function resolve(string $url): bool
    {
        $route = $this->table->mapUrlToIPAddress($url);
        if($route) {
            $this->connect($route->getIpAddress());
        } else {
            echo "Route was not found\n";
            return false;
        }
        return true;
    }

    public function stream()
    {
        $packets = [
            'Package one is clean',
            'Package two is clean',
            'Package three is __BAD__',
            'Package four is __BAD__',
        ];

        foreach ($packets as $packet) {
            if($this->firewall->isValidPacket($packet)) {
                echo "{$packet}\n";
            } else {
                echo "Dropping a packet\n";
            }
        }

        $this->terminate();
    }

    private function terminate()
    {
        $this->connectionManager->terminate();
    }

    private function connect(string $ipAddress)
    {
        $this->connectionManager->connectTo($ipAddress);
    }
}