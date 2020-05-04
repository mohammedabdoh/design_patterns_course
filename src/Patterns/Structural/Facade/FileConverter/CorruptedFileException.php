<?php
namespace App\Patterns\Structural\Facade\FileConverter;

use Exception;

class CorruptedFileException extends Exception
{

    /**
     * CorruptedFileException constructor.
     */
    public function __construct()
    {
        parent::__construct("This file is corrupted and can not be converted\n");
    }
}