<?php
namespace App\Patterns\Creational\FactoryMethod\DialogExample\Dialogs;

use App\Patterns\Creational\FactoryMethod\DialogExample\Buttons\Button;

abstract class Dialog
{
    abstract public function createdButton(): Button;

    public function renderDialog(): string
    {
        $button = $this->createdButton();

        return "
            ##########################
            {$button->show()}
            ##########################
        ";
    }
}