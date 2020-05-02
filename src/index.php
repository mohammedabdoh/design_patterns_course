<?php

require_once __DIR__.'/../vendor/autoload.php';

use App\Patterns\Structural\Adapter\SMSAdapter\Adapters\ABSSMSClientAdapter;
use App\Patterns\Structural\Adapter\SMSAdapter\Messages\SMSMessage;

$message = new SMSMessage('Welcome to our club', '012313999999');
$message2 = new SMSMessage('Please, join our community', '0123987');
$message3 = new SMSMessage('Your account has been activated', '012313999999');
$message4 = new SMSMessage('Thank you for your feedback', '0123987');

$client = new ABSSMSClientAdapter([
    $message, $message2, $message3
]);
$client->addMessage($message4);

$client->filterNumbers();
$client->send();
var_dump($client->getDeliveryStatus());