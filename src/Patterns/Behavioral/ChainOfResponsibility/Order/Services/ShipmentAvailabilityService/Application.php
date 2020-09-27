<?php

namespace App\Patterns\Behavioral\ChainOfResponsibility\Order\Services\ShipmentAvailabilityService;

use App\Patterns\Behavioral\ChainOfResponsibility\Order\Order;

class Application
{
    private array $shipmentAvailability = [
        'TRK-1' => "2020-07-01",
        'TRK-2' => "2020-07-23",
        'TRK-3' => "2020-10-13",
    ];

    public function hasShipmentTruckAvailable(Order $order): bool
    {
        foreach ($this->shipmentAvailability as $shipmentDate) {
            if($order->getShipmentDate() >= new \DateTime($shipmentDate)) {
                return true;
            }
        }
        return false;
    }
}