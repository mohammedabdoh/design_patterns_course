<?php

namespace App\Patterns\Behavioral\ChainOfResponsibility\Order\Exceptions;

use Throwable;

class NoShipmentAvailableException extends \Exception
{
    public function __construct(
        $message = "Sorry, we do not ship at this time",
        $code = 0,
        Throwable $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}