<?php

namespace App\Patterns\Behavioral\ChainOfResponsibility\Order\Exceptions;

use Throwable;

class NoProductAvailableException extends \Exception
{
    public function __construct(
        $message = "Sorry, the product is not available at the moment",
        $code = 0,
        Throwable $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}