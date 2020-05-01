<?php
namespace App\Patterns\Creational\AbstractFactory\FormAbstractFactory\DesktopForm;


use App\Patterns\Creational\AbstractFactory\FormAbstractFactory\AbstractTextArea;

class DesktopTextArea extends AbstractTextArea
{
    public function onResize(): void
    {
        echo "The text area {$this->getName()} has been resized\n";
    }

    public function render(): void
    {
        echo "Desktop Text Area";
    }
}