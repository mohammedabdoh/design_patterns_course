<?php
namespace App\Patterns\Creational\AbstractFactory\FormAbstractFactory\MobileForm;


use App\Patterns\Creational\AbstractFactory\FormAbstractFactory\AbstractTextInput;

class MobileTextInput extends AbstractTextInput
{
    function onChange(): void
    {
        echo "The value oof the {$this->getName()} input was changed to {$this->getValue()}\n";
    }

    public function render(): void
    {
        echo "Mobile Text Input";
    }
}