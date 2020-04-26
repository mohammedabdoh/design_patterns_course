<?php
namespace App\OOP\Concepts;

class BMW extends Car
{

    public function move(): int
    {
        return $this->speed;
    }

    public function turnOn(): bool
    {
        $this->turnedOn = true;
        return true;
    }

    public function turnOff(): bool
    {
        $this->turnedOn = false;
        return true;
    }

    public function accelerate(int $speed): bool
    {
        $this->speed = $speed;
        return true;
    }

    public function park(): bool
    {
        return true;
    }
}