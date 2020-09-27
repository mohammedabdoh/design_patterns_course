<?php

namespace App\Patterns\Behavioral\ChainOfResponsibility\Order\Handlers;

use App\Patterns\Behavioral\ChainOfResponsibility\Order\Order;

interface Handler
{
    public function setNextHandler(Handler $handler);
    public function handle(Order $order);
}