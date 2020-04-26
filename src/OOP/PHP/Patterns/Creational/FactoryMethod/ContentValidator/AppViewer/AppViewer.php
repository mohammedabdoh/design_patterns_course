<?php
namespace App\OOP\PHP\Patterns\Creational\FactoryMethod\ContentValidator\AppViewer;

use App\OOP\PHP\Patterns\Creational\FactoryMethod\ContentValidator\Interpreters\Interpreter;

abstract class AppViewer
{
    abstract public function createInterpreter(): Interpreter;

    public function viewContentOnScreen(): string
    {
        $interpreter = $this->createInterpreter();
        if($interpreter->validate()) {
            $interpreter->parse();
            $interpreter->compile();
            return $interpreter->getContent();
        }
        return "Invalid content to show";
    }
}