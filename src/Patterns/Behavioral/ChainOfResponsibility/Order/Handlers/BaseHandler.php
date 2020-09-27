<?php


namespace App\Patterns\Behavioral\ChainOfResponsibility\Order\Handlers;


abstract class BaseHandler implements Handler
{
    private Handler $nextHandler;

    public function setNextHandler(Handler $handler)
    {
        $this->nextHandler = $handler;
        return $this->nextHandler;
    }

    /**
     * @return Handler
     */
    public function getNextHandler(): Handler
    {
        return $this->nextHandler;
    }
}