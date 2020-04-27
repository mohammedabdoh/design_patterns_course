<?php
namespace App\Patterns\Creational\Builder\Computer\MotherBoard\MainParts;

class Disk
{
    private string $type;

    /**
     * Disk constructor.
     * @param string $type
     */
    public function __construct(string $type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
}