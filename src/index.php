<?php

require_once __DIR__.'/../vendor/autoload.php';

use App\Patterns\Behavioral\ChainOfResponsibility\Order\Exceptions\NoLoyalUserException;
use App\Patterns\Behavioral\ChainOfResponsibility\Order\Exceptions\NoProductAvailableException;
use App\Patterns\Behavioral\ChainOfResponsibility\Order\Exceptions\NoShipmentAvailableException;
use App\Patterns\Behavioral\ChainOfResponsibility\Order\Handlers\LoyaltyHandler;
use App\Patterns\Behavioral\ChainOfResponsibility\Order\Handlers\ProductAvailabilityHandler;
use App\Patterns\Behavioral\ChainOfResponsibility\Order\Handlers\ShipmentHandler;
use App\Patterns\Behavioral\ChainOfResponsibility\Order\Handlers\OrderHandler;
use App\Patterns\Behavioral\ChainOfResponsibility\Order\User;
use App\Patterns\Behavioral\ChainOfResponsibility\Order\Product;
use App\Patterns\Behavioral\ChainOfResponsibility\Order\Order;

$user = new User("USR-103", "Mohammed Abdoh");
$product = new Product("PRD-1", "Lenovo laptop");
$order = new Order($user, $product, new DateTime("2020-07-05"));

$loyaltyHandler = new LoyaltyHandler();
$loyaltyHandler
    ->setNextHandler(new ProductAvailabilityHandler())
    ->setNextHandler(new ShipmentHandler())
    ->setNextHandler(new OrderHandler());

try {
    $loyaltyHandler->handle($order);
} catch (NoLoyalUserException $e) {
    echo $e->getMessage() . "\n";
} catch (NoProductAvailableException $e) {
    echo $e->getMessage() . "\n";
} catch (NoShipmentAvailableException $e) {
    echo $e->getMessage() . "\n";
} catch (Exception $e) {

}