<?php
namespace App\Patterns\Creational\AbstractFactory\FormAbstractFactory;


abstract class AbstractTextArea implements Renderable
{
    protected string $name;
    protected string $text;

    /**
     * AbstractTextArea constructor.
     * @param string $name
     * @param string $text
     */
    public function __construct(string $name, string $text)
    {
        $this->name = $name;
        $this->text = $text;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @param string $text
     */
    public function setText(string $text): void
    {
        $this->text = $text;
    }

    abstract public function onResize(): void;
}