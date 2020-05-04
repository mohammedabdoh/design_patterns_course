<?php

require_once __DIR__.'/../vendor/autoload.php';

use App\Patterns\Structural\Facade\FileConverter\CorruptedFileException;
use App\Patterns\Structural\Facade\FileConverter\FileConverterFacade;

try {
    $converter = new FileConverterFacade('audioLecture.mp4');
    $converter->convert();
} catch (CorruptedFileException $e) {
    echo $e->getMessage();
}

