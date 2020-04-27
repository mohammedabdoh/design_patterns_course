<?php
namespace App\Patterns\Creational\Builder\ComputerExample\Computer\MotherBoard\MainParts;

class GPU
{
    private int $size;

    /**
     * GPU constructor.
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