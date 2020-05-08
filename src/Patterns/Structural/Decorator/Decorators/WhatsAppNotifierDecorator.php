<?php
namespace App\Patterns\Structural\Decorator\Decorators;

use App\Patterns\Structural\Decorator\Notifier;
use App\Patterns\Structural\Decorator\NotifierDecorator;

class WhatsAppNotifierDecorator extends NotifierDecorator
{
    protected string $phoneNumber;

    /**
     * SMSNotifierDecorator constructor.
     * @param Notifier $notifier
     * @param string $phoneNumber
     */
    public function __construct(Notifier $notifier, string $phoneNumber)
    {
        parent::__construct($notifier);
        $this->phoneNumber = $phoneNumber;
    }

    public function notify()
    {
        parent::notify();
        $this->sendSMS();
    }

    private function sendSMS()
    {
        echo "Sending WhatsApp message to {$this->phoneNumber}\n";
        echo "Your latest operation was executed successfully\n";
    }
}