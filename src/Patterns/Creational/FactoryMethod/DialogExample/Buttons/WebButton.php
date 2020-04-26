<?php


namespace App\Patterns\Creational\FactoryMethod\DialogExample\Buttons;


class WebButton extends Button
{

    public function show(): string
    {
        return '<div><button>Web Button</button></div>';
    }

    public function click(): void
    {
        // A punch of commands to be executed
    }
}