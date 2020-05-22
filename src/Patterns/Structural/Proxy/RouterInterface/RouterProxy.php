<?php
namespace App\Patterns\Structural\Proxy\RouterInterface;

use App\Patterns\Structural\Proxy\RouterInterface\Clients\Application;

class RouterProxy implements RouterInterface
{
    /**
     * @var RouterInterface
     */
    private RouterInterface $router;

    private Application $app;

    private array $acl;

    /**
     * RouterProxy constructor.
     * @param RouterInterface $router
     * @param array $acl
     * @param Application $app
     */
    public function __construct(RouterInterface $router, array $acl, Application $app)
    {
        $this->router = $router;
        $this->app = $app;
        $this->acl = $acl;
    }

    public function resolve(string $url): bool
    {
        if($this->isAllowedApplication()) {
            return $this->router->resolve($url);
        } else {
            echo "This application can not use the router\n";
        }
        return false;
    }

    public function stream()
    {
        if($this->isAllowedApplication()) {
            $this->router->stream();
        } else {
            echo "This application can not use the router\n";
        }
    }

    private function isAllowedApplication(): bool
    {
        return in_array($this->app->getAppName(), $this->acl);
    }
}