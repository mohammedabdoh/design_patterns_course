<?php
namespace App\Patterns\Creational\Builder\Computer\Types;

use App\Patterns\Creational\Builder\Computer\CoolingSystem;

class ComputerCS extends Computer implements ICoolingSystem
{
    private CoolingSystem $cs;

    public function turnOn(): bool
    {
        // do something and then
        return true;
    }

    public function turnOff(): bool
    {
        // Do something
        return true;
    }

    public function coolDown(int $temp): bool
    {
        // do something to cool down to $temp
        return true;
    }

    /**
     * @param CoolingSystem $cs
     */
    public function setCs(CoolingSystem $cs): void
    {
        $this->cs = $cs;
    }

    /**
     * @return CoolingSystem
     */
    public function getCs(): CoolingSystem
    {
        return $this->cs;
    }
}