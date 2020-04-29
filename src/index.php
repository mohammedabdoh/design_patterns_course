<?php

require_once __DIR__.'/../vendor/autoload.php';

use App\Patterns\Creational\Prototype\Employee\EmployeePrototype;
use App\Patterns\Creational\Prototype\Employee\ProfileData;
use App\Patterns\Creational\Prototype\Employee\Address;
use App\Patterns\Creational\Prototype\Employee\Salary;
use App\Patterns\Creational\Prototype\Employee\Privileges\Privileges;
use App\Patterns\Creational\Prototype\Employee\Privileges\Types\WebProjectPrivilege;
use App\Patterns\Creational\Prototype\Employee\Privileges\Types\NetworkPrivilege;
use App\Patterns\Creational\Prototype\Employee\Privileges\Types\ServerRoomPrivilege;

$mohammed = new EmployeePrototype(
    new ProfileData(
        'Mohammed Abdoh',
        38,
        new Address(
            51.27623,
            54.76762,
            'Al Azhar Street',
            'Cairo',
            'Egypt',
            13,
            27635
        ),
        '+2010101010101',
        '+201212121212',
        'mohammed.abdoh'
    ),
    new Salary(3000, 0.23, 300),
    new Privileges(
        [
            new WebProjectPrivilege(),
            new ServerRoomPrivilege()
        ]
    )
);
$mohammed->getPrivileges()->addPrivilege(new NetworkPrivilege());
var_dump($mohammed);

$ahmed = clone $mohammed;
var_dump($ahmed);