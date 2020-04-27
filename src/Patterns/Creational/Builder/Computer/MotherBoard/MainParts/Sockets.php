<?php
namespace App\Patterns\Creational\Builder\Computer\MotherBoard\MainParts;

class Sockets
{
    private array $sockets;

    /**
     * Sockets constructor.
     * @param array $sockets
     */
    public function __construct(array $sockets)
    {
        $this->sockets = $sockets;
    }

    public function getSockets(): array
    {
        return $this->sockets;
    }
}