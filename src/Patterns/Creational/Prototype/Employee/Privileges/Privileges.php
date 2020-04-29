<?php
namespace App\Patterns\Creational\Prototype\Employee\Privileges;

use App\Patterns\Creational\Prototype\Employee\Privileges\Types\PrivilegeTypeInterface;

class Privileges
{
    private array $privileges;

    /**
     * Privileges constructor.
     * @param array $privileges
     */
    public function __construct(array $privileges)
    {
        $this->privileges = $privileges;
    }

    public function addPrivilege(PrivilegeTypeInterface $privilege)
    {
        array_push($this->privileges, $privilege);
    }

    public function clearPrivileges()
    {
        $this->privileges = [];
    }
}