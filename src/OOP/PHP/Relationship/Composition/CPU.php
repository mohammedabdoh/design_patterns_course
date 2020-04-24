<?php


namespace App\OOP\PHP\Relationship\Composition;


class CPU
{
    private int $speed;

    /**
     * CPU constructor.
     * @param int $speed
     */
    public function __construct(int $speed)
    {
        $this->speed = $speed;
    }

    /**
     * @return int
     */
    public function getSpeed(): int
    {
        return $this->speed;
    }
}