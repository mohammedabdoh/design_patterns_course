<?php
namespace App\Patterns\Structural\Proxy\RouterInterface\RoutingComponents;

class Route
{
    private string $url;
    private string $ipAddress;

    /**
     * Route constructor.
     * @param string $url
     * @param string $ipAddress
     */
    public function __construct(string $url, string $ipAddress)
    {
        $this->url = $url;
        $this->ipAddress = $ipAddress;
    }

    /**
     * @return string
     */
    public function getIpAddress(): string
    {
        return $this->ipAddress;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }
}