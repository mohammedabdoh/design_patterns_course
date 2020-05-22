<?php
namespace App\Patterns\Structural\Flyweight\GameBoard;

class GameBoard
{
    /** @var GameTileBorder[] */
    private ?array $tiles;

    /**
     * GameBoard constructor.
     * @param GameTileBorder[]|array $tiles
     */
    public function __construct(?array $tiles = [])
    {
        $this->tiles = $tiles;
    }

    public function addTile(GameTileBorder $tile)
    {
        array_push($this->tiles, $tile);
    }


    public function __toString(): string
    {
        return join("\n", array_map(fn(GameTileBorder $border) =>
            $border->getStyle() .
            ' | '.
            $border->getThickness() .
            ' | '.
            $border->getTile()->getColor() .
            ' | '.
            $border->getTile()->getSize() .
            ' | '.
            $border->getTile()->getLevel()
            ,$this->tiles)
        );
    }
}