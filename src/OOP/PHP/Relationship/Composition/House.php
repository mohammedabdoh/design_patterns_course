<?php


namespace App\OOP\PHP\Relationship\Composition;


class House
{
    private array $rooms;

    /**
     * House constructor.
     * @param array $rooms
     */
    public function __construct(array $rooms)
    {
        $this->rooms = $rooms;
    }
}