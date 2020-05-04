<?php
namespace App\Patterns\Structural\Facade\FileConverter\Normalizer;

interface Normalizer
{
    public function normalize(string $fileName): void;
}