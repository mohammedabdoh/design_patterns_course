<?php
namespace App\Patterns\Creational\Builder\ComputerExample\Computer\Types;

use App\Patterns\Creational\Builder\ComputerExample\Computer\Keyboard;
use App\Patterns\Creational\Builder\ComputerExample\Computer\Monitor;
use App\Patterns\Creational\Builder\ComputerExample\Computer\MotherBoard\MotherBoard;
use App\Patterns\Creational\Builder\ComputerExample\Computer\Mouse;

abstract class Computer
{
    protected MotherBoard $motherBoard;
    protected Keyboard $keyboard;
    protected Mouse $mouse;
    protected Monitor $monitor;

    abstract public function turnOn(): bool;
    abstract public function turnOff(): bool;

    /**
     * @param MotherBoard $motherBoard
     */
    public function setMotherBoard(MotherBoard $motherBoard): void
    {
        $this->motherBoard = $motherBoard;
    }

    /**
     * @param Keyboard $keyboard
     */
    public function setKeyboard(Keyboard $keyboard): void
    {
        $this->keyboard = $keyboard;
    }

    /**
     * @param Mouse $mouse
     */
    public function setMouse(Mouse $mouse): void
    {
        $this->mouse = $mouse;
    }

    /**
     * @param Monitor $monitor
     */
    public function setMonitor(Monitor $monitor): void
    {
        $this->monitor = $monitor;
    }

    public function dashboard(): string
    {
        return '';
    }
}