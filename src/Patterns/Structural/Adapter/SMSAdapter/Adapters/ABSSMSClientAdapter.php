<?php
namespace App\Patterns\Structural\Adapter\SMSAdapter\Adapters;

use App\Patterns\Structural\Adapter\SMSAdapter\Adapters\ABCSMSManager\SMSManager;
use App\Patterns\Structural\Adapter\SMSAdapter\Messages\Message;
use App\Patterns\Structural\Adapter\SMSAdapter\SMSClient;
use App\Patterns\Structural\Adapter\SMSAdapter\SMSDeliveryStatus;

class ABSSMSClientAdapter extends SMSClient
{
    private ?SMSManager $manager = null;

    public function __construct(array $messages = [])
    {
        parent::__construct($messages);
        $this->manager = new SMSManager();
    }

    public function filterNumbers(): bool
    {
        $this->messages = array_filter(
            $this->messages,
            fn (Message $message) => $this->manager->validatePhoneNumber($message->getNumber())
        );
        return !empty($this->messages);
    }

    public function send(): bool
    {
        if($this->filterNumbers()) {
            $this->manager->send(
                array_map(function (Message $message): array {
                    return [
                        'number' => $message->getNumber(),
                        'text' => $message->getMessage()
                    ];
                }, $this->messages)
            );
        }
        return $this->getDeliveryStatus() === SMSDeliveryStatus::SENT;
    }

    public function getDeliveryStatus(): string
    {
        return $this->manager->getDeliveryStatus() - 4;
    }
}