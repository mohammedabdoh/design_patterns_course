<?php
namespace App\Patterns\Creational\Builder\ComputerExample\Computer\MotherBoard\MainParts;

class RAM
{
    private int $size;

    /**
     * RAM constructor.
     * @param int $size
     */
    public function __construct(int $size)
    {
        $this->size = $size;
    }

    /**
     * @return int
     */
    public function getSpeed(): int
    {
        return $this->size;
    }
}