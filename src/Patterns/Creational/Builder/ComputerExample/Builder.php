<?php
namespace App\Patterns\Creational\Builder\ComputerExample;

use App\Patterns\Creational\Builder\ComputerExample\Computer\CoolingSystem;
use App\Patterns\Creational\Builder\ComputerExample\Computer\Keyboard;
use App\Patterns\Creational\Builder\ComputerExample\Computer\Monitor;
use App\Patterns\Creational\Builder\ComputerExample\Computer\MotherBoard\MotherBoard;
use App\Patterns\Creational\Builder\ComputerExample\Computer\Mouse;
use App\Patterns\Creational\Builder\ComputerExample\Computer\Types\Computer;
use App\Patterns\Creational\Builder\ComputerExample\Computer\UPS;

abstract class Builder
{
    protected Computer $computer;

    abstract protected function buildMotherBoard(): MotherBoard;
    abstract protected function buildKeyboard(): Keyboard;
    abstract protected function buildMouse(): Mouse;
    abstract protected function buildMonitor(): Monitor;
    abstract protected function buildCollingSystem(): CoolingSystem;
    abstract protected function buildUPS(): UPS;
    abstract public function getComputer(): Computer;
}