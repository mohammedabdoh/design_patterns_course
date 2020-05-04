<?php
namespace App\Patterns\Structural\Facade\FileConverter\Compress;

interface Compress
{
    public function compress(string $fileName): void;
}