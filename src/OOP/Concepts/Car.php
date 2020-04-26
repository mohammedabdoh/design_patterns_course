<?php
namespace App\OOP\Concepts;

abstract class Car
{
    protected int $speed;
    protected int $numberOfDoors;
    protected string $gearboxSystem;
    protected string $color;

    protected bool $turnedOn = false;

    private CarDashboard $dashboard;

    /**
     * Car constructor.
     * @param int $speed
     * @param int $numberOfDoors
     * @param string $gearboxSystem
     * @param string $color
     */
    public function __construct(int $speed, int $numberOfDoors, string $gearboxSystem, string $color)
    {
        $this->speed = $speed;
        $this->numberOfDoors = $numberOfDoors;
        $this->gearboxSystem = $gearboxSystem;
        $this->color = $color;
    }

    public abstract function move() : int;
    public abstract function turnOn() : bool;
    public abstract function turnOff() : bool;
    public abstract function accelerate(int $speed) : bool;
    public abstract function park() : bool;

    public function installDashboard(CarDashboard $dashboard)
    {
        $this->dashboard = $dashboard;
    }

    public function CarInfo(): string
    {
        if($this->dashboard) {
            return "The speed is {$this->speed}\n more info ... \n {$this->dashboard->readDashBoard()}";
        } else {
            return "The speed is {$this->speed}\n";
        }
    }
}