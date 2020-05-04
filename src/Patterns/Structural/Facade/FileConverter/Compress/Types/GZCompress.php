<?php
namespace App\Patterns\Structural\Facade\FileConverter\Compress\Types;

use App\Patterns\Structural\Facade\FileConverter\Compress\Compress;

class GZCompress implements Compress
{
    public function compress(string $fileName): void
    {
        echo "File has been compressed to a gz file\n";
    }
}