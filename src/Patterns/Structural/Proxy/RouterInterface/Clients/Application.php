<?php
namespace App\Patterns\Structural\Proxy\RouterInterface\Clients;

class Application
{
    protected string $appName;

    /**
     * Application constructor.
     * @param string $appName
     */
    public function __construct(string $appName)
    {
        $this->appName = $appName;
    }

    /**
     * @return string
     */
    public function getAppName(): string
    {
        return $this->appName;
    }
}