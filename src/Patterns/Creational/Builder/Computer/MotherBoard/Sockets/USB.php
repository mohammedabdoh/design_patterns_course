<?php
namespace App\Patterns\Creational\Builder\Computer\MotherBoard\Sockets;

class USB
{
    private string $version;

    /**
     * USB constructor.
     * @param string $version
     */
    public function __construct(string $version)
    {
        $this->version = $version;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->version;
    }
}