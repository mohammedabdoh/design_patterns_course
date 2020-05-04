<?php
namespace App\Patterns\Structural\Facade\FileConverter\FileScanner\Video;

use App\Patterns\Structural\Facade\FileConverter\FileScanner\FileScanner;

class MP4FileScanner extends FileScanner
{
    public function scan(): bool
    {
        // Do a lot of stuff here then return the file status
        return (bool) rand(0,1);
    }
}