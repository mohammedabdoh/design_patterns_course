<?php
namespace App\Patterns\Creational\Prototype\Employee\Privileges\Types;


class NetworkPrivilege implements PrivilegeTypeInterface
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