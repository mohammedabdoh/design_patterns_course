<?php
namespace App\Patterns\Creational\AbstractFactory\FormAbstractFactory\MobileForm;

use App\Patterns\Creational\AbstractFactory\FormAbstractFactory\AbstractButton;
use App\Patterns\Creational\AbstractFactory\FormAbstractFactory\AbstractFormFactory;
use App\Patterns\Creational\AbstractFactory\FormAbstractFactory\AbstractTextArea;
use App\Patterns\Creational\AbstractFactory\FormAbstractFactory\AbstractTextInput;
use App\Patterns\Creational\AbstractFactory\FormAbstractFactory\AbstractWindow;

class MobileFormFactory implements AbstractFormFactory
{
    public function createTextInput(): AbstractTextInput
    {
        return new MobileTextInput('Mobile Input', 'Enter your name:', '');
    }

    public function createTextArea(): AbstractTextArea
    {
        return new MobileTextArea('Mobile Text Area', 'Enter your message...');
    }

    public function createButton(): AbstractButton
    {
        return new MobileButton('Save');
    }

    public function createWindow(): AbstractWindow
    {
        return new MobileWindow('320x720');
    }
}