<?php

require_once __DIR__.'/../vendor/autoload.php';

use App\Patterns\Structural\Composite\DTOs\DataModelsDTO\OrderDTO;
use App\Patterns\Structural\Composite\DTOs\DataModelsDTO\OrderOwnerDTO;
use App\Patterns\Structural\Composite\DTOs\DataModelsDTO\AddressDTO;
use App\Patterns\Structural\Composite\DTOs\DataModelsDTO\PurchaseBill;

$address1 = new AddressDTO('Al Ahram Street', '29A', '28987');
$address2 = new AddressDTO('Cairo Street', '283', '3455');
$address3 = new AddressDTO('Mansura Street', '9A-1', '2834');

$mohammed = new OrderOwnerDTO('Mohammed Abdoh', $address1);
$ahmed = new OrderOwnerDTO('Ahmed Ali', $address2);
$ibrahim = new OrderOwnerDTO('Ibrahim Abd El Salam', $address3);

$order1 = new OrderDTO($mohammed, new DateTime('now'), 9382.23, 3);
$order2 = new OrderDTO($mohammed, new DateTime('now'), 384.29, 8);
$order3 = new OrderDTO($mohammed, new DateTime('now'), 112.98, 2);

$bill = new PurchaseBill([$order1, $order2, $order3]);

echo $bill;