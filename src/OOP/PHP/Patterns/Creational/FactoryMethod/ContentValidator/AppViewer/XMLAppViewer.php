<?php
namespace App\OOP\PHP\Patterns\Creational\FactoryMethod\ContentValidator\AppViewer;

use App\OOP\PHP\Patterns\Creational\FactoryMethod\ContentValidator\Interpreters\Interpreter;
use App\OOP\PHP\Patterns\Creational\FactoryMethod\ContentValidator\Interpreters\XMLInterpreter;

class XMLAppViewer extends AppViewer
{

    public function createInterpreter(): Interpreter
    {
        return new XMLInterpreter('xml content');
    }
}