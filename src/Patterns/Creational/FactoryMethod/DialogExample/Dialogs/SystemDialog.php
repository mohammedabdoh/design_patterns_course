<?php


namespace App\Patterns\Creational\FactoryMethod\DialogExample\Dialogs;


use App\Patterns\Creational\FactoryMethod\DialogExample\Buttons\Button;
use App\Patterns\Creational\FactoryMethod\DialogExample\Buttons\SystemButton;

class SystemDialog extends Dialog
{

    public function createdButton(): Button
    {
        return new SystemButton();
    }
}