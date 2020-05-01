<?php
namespace App\Patterns\Creational\AbstractFactory\FormAbstractFactory\MobileForm;


use App\Patterns\Creational\AbstractFactory\FormAbstractFactory\AbstractTextArea;

class MobileTextArea extends AbstractTextArea
{
    public function onResize(): void
    {
        echo "The text area {$this->getName()} has been resized\n";
    }

    public function render(): void
    {
        echo "Mobile Text Area";
    }
}