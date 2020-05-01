<?php
namespace App\Patterns\Creational\AbstractFactory\FormAbstractFactory;


interface AbstractFormFactory
{
    public function createTextInput(): AbstractTextInput;
    public function createTextArea(): AbstractTextArea;
    public function createButton(): AbstractButton;
    public function createWindow(): AbstractWindow;
}