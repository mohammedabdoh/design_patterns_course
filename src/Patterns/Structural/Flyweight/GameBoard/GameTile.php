<?php
namespace App\Patterns\Structural\Flyweight\GameBoard;

class GameTile
{
    private string $color;
    private string $size;
    private string $level;

    /**
     * GameTile constructor.
     * @param string $color
     * @param string $size
     * @param string $level
     */
    public function __construct(string $color, string $size, string $level)
    {
        $this->color = $color;
        $this->size = $size;
        $this->level = $level;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @return string
     */
    public function getSize(): string
    {
        return $this->size;
    }

    /**
     * @return string
     */
    public function getLevel(): string
    {
        return $this->level;
    }
}