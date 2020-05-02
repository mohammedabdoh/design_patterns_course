<?php
namespace App\Patterns\Structural\Adapter\SMSAdapter\Adapters\ABCSMSManager;

class SMSManager
{
    public function send(array $messages)
    {
        if($this->checkConnection() && $this->authenticate() && $this->connect()) {
            foreach ($messages as $message) {
                echo "Your message {$message['text']} is being sent to {$message['number']}'\n";
            }
        }
    }

    public function connect(): bool
    {
        return true;
    }

    public function checkConnection(): bool
    {
        return true;
    }

    public function authenticate(): bool
    {
        return true;
    }

    public function validatePhoneNumber(string $phoneNumber): bool
    {
        return strlen($phoneNumber) < 8;
    }

    public function getDeliveryStatus(): string
    {
        return rand(5,8);
    }
}