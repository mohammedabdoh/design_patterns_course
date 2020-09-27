<?php

namespace App\Patterns\Behavioral\ChainOfResponsibility\Order\Exceptions;

use Throwable;

class NoLoyalUserException extends \Exception
{
    public function __construct(
        $message = "Sorry, you do not have required points to place the order",
        $code = 0,
        Throwable $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}