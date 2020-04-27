<?php
namespace App\Patterns\Creational\Builder\ComputerExample\Computer\Types;

interface ICoolingSystem
{
    public function coolDown(int $temp): bool;
}