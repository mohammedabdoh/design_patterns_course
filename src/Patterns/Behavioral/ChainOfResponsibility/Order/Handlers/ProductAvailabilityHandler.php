<?php

namespace App\Patterns\Behavioral\ChainOfResponsibility\Order\Handlers;

use App\Patterns\Behavioral\ChainOfResponsibility\Order\Exceptions\NoProductAvailableException;
use App\Patterns\Behavioral\ChainOfResponsibility\Order\Order;
use App\Patterns\Behavioral\ChainOfResponsibility\Order\Services\ProductAvailabilityService\Application;

class ProductAvailabilityHandler extends BaseHandler
{
    /**
     * @param Order $order
     * @throws NoProductAvailableException
     */
    public function handle(Order $order)
    {
        $productAvailabilityService = new Application();
        if($productAvailabilityService->isProductAvailable($order->getProduct())) {
            if($this->getNextHandler() !== null) {
                $this->getNextHandler()->handle($order);
            }
        } else {
            throw new NoProductAvailableException();
        }
    }
}