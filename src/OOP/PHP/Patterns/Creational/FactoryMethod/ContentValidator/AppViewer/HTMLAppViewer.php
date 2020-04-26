<?php
namespace App\OOP\PHP\Patterns\Creational\FactoryMethod\ContentValidator\AppViewer;

use App\OOP\PHP\Patterns\Creational\FactoryMethod\ContentValidator\Interpreters\HTMLInterpreter;
use App\OOP\PHP\Patterns\Creational\FactoryMethod\ContentValidator\Interpreters\Interpreter;

class HTMLAppViewer extends AppViewer
{

    public function createInterpreter(): Interpreter
    {
        return new HTMLInterpreter('<DOCTYPE html>');
    }
}