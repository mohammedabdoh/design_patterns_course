<?php

require_once __DIR__.'/../vendor/autoload.php';

use App\Patterns\Creational\Builder\Builders\ComputerCSBuilder;
use App\Patterns\Creational\Builder\Builders\ComputerXLBuilder;
use App\Patterns\Creational\Builder\Director;

$director = new Director(new ComputerCSBuilder());
$computer = $director->makeComputer();
var_dump($computer);
$director->changeBuilder(new ComputerXLBuilder());
$computer = $director->makeComputer();
var_dump($computer);