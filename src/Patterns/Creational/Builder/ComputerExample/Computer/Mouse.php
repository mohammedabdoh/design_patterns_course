<?php
namespace App\Patterns\Creational\Builder\ComputerExample\Computer;

class Mouse
{
    private bool $withExtraUtilities;

    /**
     * Mouse constructor.
     * @param bool $withExtraUtilities
     */
    public function __construct(bool $withExtraUtilities)
    {
        $this->withExtraUtilities = $withExtraUtilities;
    }

    /**
     * @return bool
     */
    public function isUtfSupport(): bool
    {
        return $this->withExtraUtilities;
    }
}