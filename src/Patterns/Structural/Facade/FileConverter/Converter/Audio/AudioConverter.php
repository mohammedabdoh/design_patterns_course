<?php
namespace App\Patterns\Structural\Facade\FileConverter\Converter\Audio;

use App\Patterns\Structural\Facade\FileConverter\Converter\Converter;

class AudioConverter implements Converter
{
    public function convert(string $fileName, string $fromType, string $toType): void
    {
        echo "I am converting audio file {$fileName} from $fromType to $toType\n";
    }
}