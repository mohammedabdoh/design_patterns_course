<?php
namespace App\Patterns\Structural\Proxy\RouterInterface;

interface RouterInterface
{
    public function resolve(string $url): bool;
    public function stream();
}