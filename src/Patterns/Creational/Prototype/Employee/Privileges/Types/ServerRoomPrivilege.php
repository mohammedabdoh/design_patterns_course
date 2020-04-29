<?php
namespace App\Patterns\Creational\Prototype\Employee\Privileges\Types;


class ServerRoomPrivilege implements PrivilegeTypeInterface
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