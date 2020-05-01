<?php
namespace App\Patterns\Creational\AbstractFactory\FormAbstractFactory\WebForm;


use App\Patterns\Creational\AbstractFactory\FormAbstractFactory\AbstractTextInput;

class WebTextInput extends AbstractTextInput
{
    function onChange(): void
    {
        echo "The value oof the {$this->getName()} input was changed to {$this->getValue()}\n";
    }

    public function render(): void
    {
        echo "Web Text Input\n";
    }
}