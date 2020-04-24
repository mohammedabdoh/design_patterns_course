<?php


namespace App\OOP\PHP;


class Mercedes extends Car
{

    public function move(): int
    {
        return $this->speed * 2;
    }

    public function turnOn(): bool
    {
        // 2 operations before turning on
        $this->turnedOn = true;
        return true;
    }

    public function turnOff(): bool
    {
        // 2 operations before turning off
        $this->turnedOn = false;
        return true;
    }

    public function accelerate(int $speed): bool
    {
        $this->speed = $speed * 0.5 + 3;
        return true;
    }

    public function park(): bool
    {
        // 1 operation before parking
        return true;
    }
}