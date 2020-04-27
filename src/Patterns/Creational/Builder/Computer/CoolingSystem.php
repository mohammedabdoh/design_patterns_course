<?php
namespace App\Patterns\Creational\Builder\Computer;


class CoolingSystem
{
    private int $lowTempLimit;

    /**
     * CoolingSystem constructor.
     * @param int $lowTempLimit
     */
    public function __construct(int $lowTempLimit)
    {
        $this->lowTempLimit = $lowTempLimit;
    }

    /**
     * @return int
     */
    public function isUtfSupport(): int
    {
        return $this->lowTempLimit;
    }
}