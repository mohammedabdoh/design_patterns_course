<?php


namespace App\OOP\PHP;


class Order
{
    private string $source;
    private string $destination;
    private int $weight;

    /**
     * Order constructor.
     * @param string $source
     * @param string $destination
     * @param int $weight
     */
    public function __construct(string $source, string $destination, int $weight)
    {
        $this->source = $source;
        $this->destination = $destination;
        $this->weight = $weight;
    }

    public function deliverOrder(Car $car): string
    {
        $car->turnOn();
        $car->move();
        $car->accelerate(120);
        $car->park();
        $car->turnOff();

        if($car instanceof WeightHolder) {
            $car->leftCargo();
        }

        return "I am moving from {$this->source} to {$this->destination} 
        to deliver a package of {$this->weight} K.G";
    }
}