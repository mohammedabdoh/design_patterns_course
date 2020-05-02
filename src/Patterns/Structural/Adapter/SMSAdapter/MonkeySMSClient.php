<?php
namespace App\Patterns\Structural\Adapter\SMSAdapter;

use App\Patterns\Structural\Adapter\SMSAdapter\Messages\Message;

class MonkeySMSClient extends SMSClient
{

    public function filterNumbers(): bool
    {
        $this->messages = array_filter($this->messages, fn (Message $message) => $message->validateNumber());
        return !empty($this->messages);
    }

    public function send(): bool
    {
        if($this->filterNumbers()) {
            /** @var Message $message */
            foreach ($this->messages as $message) {
                $this->deliverStatus = rand(1,4);
                echo "Message is being sent '{$message->getMessage()}'\n";
            }
        }
        return $this->getDeliveryStatus() === SMSDeliveryStatus::SENT;
    }

    public function getDeliveryStatus(): string
    {
        return $this->deliverStatus;
    }
}