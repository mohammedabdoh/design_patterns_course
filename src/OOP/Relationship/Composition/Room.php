<?php
namespace App\OOP\Relationship\Composition;

class Room
{
    private string $color;
    private int $size;

    /**
     * Room constructor.
     * @param string $color
     * @param int $size
     */
    public function __construct(string $color, int $size)
    {
        $this->color = $color;
        $this->size = $size;
    }
}