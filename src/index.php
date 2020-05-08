<?php

require_once __DIR__.'/../vendor/autoload.php';

use App\Patterns\Structural\Decorator\Decorators\SMSNotifierDecorator;
use App\Patterns\Structural\Decorator\EmailNotifier;
use App\Patterns\Structural\Decorator\Decorators\WhatsAppNotifierDecorator;

$smsNotificationEnabled = false;
$whatsAppNotificationEnabled = true;
$notifier = new EmailNotifier('mohammed@abc.com');

if($smsNotificationEnabled) {
    $notifier = new SMSNotifierDecorator($notifier, '010111111111');
}

if($whatsAppNotificationEnabled) {
    $notifier = new WhatsAppNotifierDecorator($notifier, '0123848747847');
}

$notifier->notify();

