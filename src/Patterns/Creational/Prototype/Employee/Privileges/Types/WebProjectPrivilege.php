<?php
namespace App\Patterns\Creational\Prototype\Employee\Privileges\Types;


class WebProjectPrivilege implements PrivilegeTypeInterface
{

    public function enable(): bool
    {
        return true;
    }

    public function disable(): bool
    {
        return true;
    }
}