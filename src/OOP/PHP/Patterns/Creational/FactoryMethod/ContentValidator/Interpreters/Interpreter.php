<?php
namespace App\OOP\PHP\Patterns\Creational\FactoryMethod\ContentValidator\Interpreters;

abstract class Interpreter
{
    protected string $content;

    /**
     * Interpreter constructor.
     * @param string $content
     */
    public function __construct(string $content)
    {
        $this->content = $content;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    abstract public function validate();
    abstract public function parse();
    abstract public function compile();
}