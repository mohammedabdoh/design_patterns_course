<?php

require_once __DIR__.'/../vendor/autoload.php';

use App\Patterns\Creational\Singleton\AppSettings;

$settings = AppSettings::getInstance();
var_dump($settings::getConfig('Database')['portNumber']);