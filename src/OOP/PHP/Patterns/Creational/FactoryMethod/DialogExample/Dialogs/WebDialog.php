<?php
namespace App\OOP\PHP\Patterns\Creational\FactoryMethod\DialogExample\Dialogs;

use App\OOP\PHP\Patterns\Creational\FactoryMethod\DialogExample\Buttons\Button;
use App\OOP\PHP\Patterns\Creational\FactoryMethod\DialogExample\Buttons\WebButton;

class WebDialog extends Dialog
{

    public function createdButton(): Button
    {
        return new WebButton();
    }
}