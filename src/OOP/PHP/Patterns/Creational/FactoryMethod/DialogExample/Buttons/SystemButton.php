<?php


namespace App\OOP\PHP\Patterns\Creational\FactoryMethod\DialogExample\Buttons;


class SystemButton extends Button
{

    public function show(): string
    {
        return '# System Button #';
    }

    public function click(): void
    {
        // A punch of commands to be executed
    }
}