<?php

require_once __DIR__.'/../vendor/autoload.php';

use App\Patterns\Creational\AbstractFactory\FormAbstractFactory\MobileForm\MobileFormFactory;
use App\Patterns\Creational\AbstractFactory\FormAbstractFactory\WebForm\WebFormFactory;
use App\Patterns\Creational\AbstractFactory\FormAbstractFactory\GUIClient;

$client = new GUIClient(new WebFormFactory());
echo $client->createForm();
$client = new GUIClient(new MobileFormFactory());
echo $client->createForm();