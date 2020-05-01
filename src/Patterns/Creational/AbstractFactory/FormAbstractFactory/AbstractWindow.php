<?php
namespace App\Patterns\Creational\AbstractFactory\FormAbstractFactory;


abstract class AbstractWindow
{
    protected array $components;

    protected string $size;

    /**
     * AbstractWindow constructor.
     * @param string $size
     */
    public function __construct(string $size)
    {
        $this->size = $size;
    }

    /**
     * @param $component
     */
    public function addComponent(Renderable $component)
    {
        $this->components[] = $component;
    }

    /**
     * @return string
     */
    public function render(): string
    {
        $renderedComponents = implode('', array_map(fn (Renderable $elm) => $elm->render(), $this->components));
        return "Welcome to our GUI form\n{$renderedComponents}";
    }

    /**
     * @return string
     */
    public function getSize(): string
    {
        return $this->size;
    }

    /**
     * @param string $size
     */
    public function setSize(string $size): void
    {
        $this->size = $size;
    }

    abstract public function onClose(): void;
    abstract public function onResize(): void;
}