<?php
namespace App\Patterns\Creational\FactoryMethod\ContentValidator\AppViewer;

use App\Patterns\Creational\FactoryMethod\ContentValidator\Interpreters\HTMLInterpreter;
use App\Patterns\Creational\FactoryMethod\ContentValidator\Interpreters\Interpreter;

class HTMLAppViewer extends AppViewer
{

    public function createInterpreter(): Interpreter
    {
        return new HTMLInterpreter('<DOCTYPE html>');
    }
}