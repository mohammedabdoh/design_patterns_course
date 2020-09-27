<?php

namespace App\Patterns\Behavioral\ChainOfResponsibility\Order;

class User
{
    private string $id;
    private string $name;

    /**
     * User constructor.
     * @param string $id
     */
    public function __construct(string $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}