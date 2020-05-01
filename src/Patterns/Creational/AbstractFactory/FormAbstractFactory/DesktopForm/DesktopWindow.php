<?php
namespace App\Patterns\Creational\AbstractFactory\FormAbstractFactory\DesktopForm;

use App\Patterns\Creational\AbstractFactory\FormAbstractFactory\AbstractWindow;

class DesktopWindow extends AbstractWindow
{
    public function onClose(): void
    {
        echo "Thank you for your feedback.\n";
    }

    public function onResize(): void
    {
        echo "The window has new size {$this->getSize()}\n";
    }
}