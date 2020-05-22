<?php
namespace App\Patterns\Structural\Flyweight\GameBoard;

class GameTileBorder
{
    private string $style;
    private string $thickness;

    private GameTile $tile;

    /**
     * GameTileBorder constructor.
     * @param string $style
     * @param string $thickness
     * @param string $color
     * @param string $size
     * @param string $level
     */
    public function __construct(
        string $style,
        string $thickness,
        string $color,
        string $size,
        string $level
    ) {
        $this->style = $style;
        $this->thickness = $thickness;
        $this->tile = GameTileFactory::createTile($color, $size, $level);
    }

    /**
     * @return string
     */
    public function getStyle(): string
    {
        return $this->style;
    }

    /**
     * @return string
     */
    public function getThickness(): string
    {
        return $this->thickness;
    }

    /**
     * @return GameTile|mixed
     */
    public function getTile()
    {
        return $this->tile;
    }
}