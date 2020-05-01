<?php
namespace App\Patterns\Creational\AbstractFactory\FormAbstractFactory\MobileForm;


use App\Patterns\Creational\AbstractFactory\FormAbstractFactory\AbstractButton;

class MobileButton extends AbstractButton
{
    public function onClick(): void
    {
        echo "The button has been clicked\n";
    }

    public function render(): void
    {
        echo "Mobile Button";
    }
}