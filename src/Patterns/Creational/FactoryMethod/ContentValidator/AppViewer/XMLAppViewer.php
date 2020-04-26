<?php
namespace App\Patterns\Creational\FactoryMethod\ContentValidator\AppViewer;

use App\Patterns\Creational\FactoryMethod\ContentValidator\Interpreters\Interpreter;
use App\Patterns\Creational\FactoryMethod\ContentValidator\Interpreters\XMLInterpreter;

class XMLAppViewer extends AppViewer
{

    public function createInterpreter(): Interpreter
    {
        return new XMLInterpreter('xml content');
    }
}