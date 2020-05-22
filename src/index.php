<?php

require_once __DIR__.'/../vendor/autoload.php';

use App\Patterns\Structural\Proxy\RouterInterface\Clients\Application1;
use App\Patterns\Structural\Proxy\RouterInterface\Clients\Application2;
use App\Patterns\Structural\Proxy\RouterInterface\RouterFactory;
use App\Patterns\Structural\Proxy\RouterInterface\RouterProxy;

$app1 = new Application1(new DateTime('now'));
$app2 = new Application2();

$router = new RouterProxy (
    RouterFactory::createRouter(),
    ['APP_1', 'APP_3', 'APP_4'],
    $app2
);

if($router->resolve('http://www.google.com')) {
    $router->stream();
}