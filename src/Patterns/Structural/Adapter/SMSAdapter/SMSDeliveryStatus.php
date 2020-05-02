<?php
namespace App\Patterns\Structural\Adapter\SMSAdapter;

class SMSDeliveryStatus
{
    const PENDING = 1;
    const SENT = 2;
    const DELIVERED = 3;
    const FAILED = 4;
}