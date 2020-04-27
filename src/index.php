<?php

require_once __DIR__.'/../vendor/autoload.php';

use App\Patterns\Creational\Builder\ComputerExample\Builders\ComputerCSBuilder;
use App\Patterns\Creational\Builder\ComputerExample\Builders\ComputerXLBuilder;
use App\Patterns\Creational\Builder\ComputerExample\Director;

$director = new Director(new ComputerCSBuilder());
$computer = $director->makeComputer();
var_dump($computer);
$director->changeBuilder(new ComputerXLBuilder());
$computer = $director->makeComputer();
var_dump($computer);