<?php
namespace App\Patterns\Structural\Facade\FileConverter\FileScanner;

abstract class FileScanner
{
    protected string $file;

    /**
     * FileScanner constructor.
     * @param string $file
     */
    public function __construct(string $file)
    {
        $this->file = $file;
    }

    abstract public function scan(): bool;
}