<?php
namespace App\Patterns\Creational\AbstractFactory\FormAbstractFactory\WebForm;


use App\Patterns\Creational\AbstractFactory\FormAbstractFactory\AbstractButton;
use App\Patterns\Creational\AbstractFactory\FormAbstractFactory\AbstractFormFactory;
use App\Patterns\Creational\AbstractFactory\FormAbstractFactory\AbstractTextArea;
use App\Patterns\Creational\AbstractFactory\FormAbstractFactory\AbstractTextInput;
use App\Patterns\Creational\AbstractFactory\FormAbstractFactory\AbstractWindow;

class WebFormFactory implements AbstractFormFactory
{
    public function createTextInput(): AbstractTextInput
    {
        return new WebTextInput('Web Input', 'Enter your name:', '');
    }

    public function createTextArea(): AbstractTextArea
    {
        return new WebTextArea('Web Text Area', 'Enter your message...');
    }

    public function createButton(): AbstractButton
    {
        return new WebButton('Submit');
    }

    public function createWindow(): AbstractWindow
    {
        return new WebWindow('800x600');
    }
}