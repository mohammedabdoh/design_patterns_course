<?php
namespace App\Patterns\Creational\Builder\ComputerExample\Computer;

class Keyboard
{
    private bool $utfSupport;

    /**
     * Keyboard constructor.
     * @param bool $utfSupport
     */
    public function __construct(bool $utfSupport)
    {
        $this->utfSupport = $utfSupport;
    }

    /**
     * @return bool
     */
    public function isUtfSupport(): bool
    {
        return $this->utfSupport;
    }
}