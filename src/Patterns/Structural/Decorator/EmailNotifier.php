<?php
namespace App\Patterns\Structural\Decorator;


class EmailNotifier implements Notifier
{
    private string $email;

    /**
     * EmailNotifier constructor.
     * @param string $email
     */
    public function __construct(string $email)
    {
        $this->email = $email;
    }

    public function notify()
    {
        echo "Sending email to: {$this->email}\n";
        echo "Your latest operation was executed successfully\n";
    }
}