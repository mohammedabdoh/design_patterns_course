<?php


namespace App\OOP\PHP\Relationship\Composition;


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
    public function getSize(): int
    {
        return $this->size;
    }
}