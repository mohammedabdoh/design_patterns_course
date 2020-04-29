<?php
namespace App\Patterns\Creational\Prototype\Employee\Privileges\Types;

interface PrivilegeTypeInterface
{
    public function enable(): bool;
    public function disable(): bool;
}