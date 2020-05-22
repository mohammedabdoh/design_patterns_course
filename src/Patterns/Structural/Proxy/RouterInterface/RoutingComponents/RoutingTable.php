<?php
namespace App\Patterns\Structural\Proxy\RouterInterface\RoutingComponents;

class RoutingTable
{
    /** @var Route[] */
    private array $routes;

    /**
     * RoutingTable constructor.
     * @param Route[]|array $routes
     */
    public function __construct($routes)
    {
        $this->routes = $routes;
    }

    public function mapUrlToIPAddress(string $url): ?Route
    {
        foreach ($this->routes as $route)
        {
            if($route->getUrl() === $url)
            {
                return $route;
            }
        }
        return null;
    }

}