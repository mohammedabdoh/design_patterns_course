<?php
namespace App\Patterns\Structural\Decorator;

class NotifierDecorator implements Notifier
{

    protected Notifier $notifier;

    /**
     * NotifierDecorator constructor.
     * @param Notifier $notifier
     */
    public function __construct(Notifier $notifier)
    {
        $this->notifier = $notifier;
    }

    /**
     * @return Notifier
     */
    public function getNotifier(): Notifier
    {
        return $this->notifier;
    }

    /**
     * @param Notifier $notifier
     */
    public function setNotifier(Notifier $notifier): void
    {
        $this->notifier = $notifier;
    }

    public function notify()
    {
        $this->notifier->notify();
    }
}