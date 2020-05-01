<?php
namespace App\Patterns\Creational\AbstractFactory\FormAbstractFactory\DesktopForm;


use App\Patterns\Creational\AbstractFactory\FormAbstractFactory\AbstractTextInput;

class DesktopTextInput extends AbstractTextInput
{
    function onChange(): void
    {
        echo "The value oof the {$this->getName()} input was changed to {$this->getValue()}\n";
    }

    public function render(): void
    {
        echo "Desktop Text Input";
    }
}