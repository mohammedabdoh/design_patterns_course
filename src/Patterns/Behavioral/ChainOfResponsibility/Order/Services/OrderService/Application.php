<?php

namespace App\Patterns\Behavioral\ChainOfResponsibility\Order\Services\OrderService;

use App\Patterns\Behavioral\ChainOfResponsibility\Order\Order;

class Application
{
    private array $orders = [];

    public function addOrder(Order $order)
    {
        array_push($this->orders, $order);
    }
}