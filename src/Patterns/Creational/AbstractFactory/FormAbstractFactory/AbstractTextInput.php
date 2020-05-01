<?php
namespace App\Patterns\Creational\AbstractFactory\FormAbstractFactory;


abstract class AbstractTextInput implements Renderable
{
    protected string $name;
    protected string $label;
    protected string $value;

    /**
     * AbstractTextInput constructor.
     * @param string $name
     * @param string $label
     * @param string $value
     */
    public function __construct(string $name, string $label, string $value)
    {
        $this->name = $name;
        $this->label = $label;
        $this->value = $value;
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
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * @param string $label
     */
    public function setLabel(string $label): void
    {
        $this->label = $label;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @param string $value
     */
    public function setValue(string $value): void
    {
        $this->value = $value;
    }

    abstract function onChange(): void;
}