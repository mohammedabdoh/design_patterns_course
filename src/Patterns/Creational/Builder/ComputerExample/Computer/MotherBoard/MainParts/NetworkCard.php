<?php
namespace App\Patterns\Creational\Builder\ComputerExample\Computer\MotherBoard\MainParts;

class NetworkCard
{
    private int $category;

    /**
     * NetworkCard constructor.
     * @param int $category
     */
    public function __construct(int $category)
    {
        $this->category = $category;
    }

    /**
     * @return int
     */
    public function getCategory(): int
    {
        return $this->category;
    }
}