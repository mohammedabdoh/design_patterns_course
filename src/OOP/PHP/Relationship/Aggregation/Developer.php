<?php


namespace App\OOP\PHP\Relationship\Aggregation;


class Developer
{
    private string $name;

    /**
     * Developer constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}