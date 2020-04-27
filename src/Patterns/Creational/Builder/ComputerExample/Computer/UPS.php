<?php
namespace App\Patterns\Creational\Builder\ComputerExample\Computer;

class UPS
{
    private int $duration;

    /**
     * UPS constructor.
     * @param int $duration
     */
    public function __construct(int $duration)
    {
        $this->duration = $duration;
    }

    /**
     * @return int
     */
    public function isUtfSupport(): int
    {
        return $this->duration;
    }
}