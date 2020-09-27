<?php

namespace App\Patterns\Behavioral\ChainOfResponsibility\Order\Handlers;

use App\Patterns\Behavioral\ChainOfResponsibility\Order\Exceptions\NoShipmentAvailableException;
use App\Patterns\Behavioral\ChainOfResponsibility\Order\Order;
use App\Patterns\Behavioral\ChainOfResponsibility\Order\Services\ShipmentAvailabilityService\Application;

class ShipmentHandler extends BaseHandler
{
    /**
     * @param Order $order
     * @throws NoShipmentAvailableException
     */
    public function handle(Order $order)
    {
        $productAvailabilityService = new Application();
        if($productAvailabilityService->hasShipmentTruckAvailable($order)) {
            if($this->getNextHandler() !== null) {
                $this->getNextHandler()->handle($order);
            }
        } else {
            throw new NoShipmentAvailableException();
        }
    }
}