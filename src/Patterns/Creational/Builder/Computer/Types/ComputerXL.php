<?php
namespace App\Patterns\Creational\Builder\Computer\Types;

use App\Patterns\Creational\Builder\Computer\CoolingSystem;
use App\Patterns\Creational\Builder\Computer\UPS;

class ComputerXL extends Computer implements ICoolingSystem, IPower
{
    private CoolingSystem $cs;
    private UPS $ups;

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

    public function backupPower(): bool
    {
        // do something to resume after a power loss
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
     * @param UPS $ups
     */
    public function setUps(UPS $ups): void
    {
        $this->ups = $ups;
    }

    /**
     * @return CoolingSystem
     */
    public function getCs(): CoolingSystem
    {
        return $this->cs;
    }

    /**
     * @return UPS
     */
    public function getUps(): UPS
    {
        return $this->ups;
    }
}