<?php


namespace App\OOP\PHP\Patterns\Creational\FactoryMethod\ContentValidator\Interpreters;


class XMLInterpreter extends Interpreter
{

    public function validate(): bool
    {
        return preg_match('/<\?xml/i', $this->content);
    }

    public function parse(): void
    {
        // Parsing the html string
    }

    public function compile()
    {
        // compile the AST
    }
}