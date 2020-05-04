<?php
namespace App\Patterns\Structural\Facade\FileConverter\Normalizer\Video;

use App\Patterns\Structural\Facade\FileConverter\Normalizer\Normalizer;

class VideoNormalizer implements Normalizer
{
    public function normalize(string $fileName): void
    {
        echo "I am normalizing the video {$fileName} due to some data corruption\n";
    }
}