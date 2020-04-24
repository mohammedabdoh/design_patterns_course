<?php

require_once __DIR__.'/../vendor/autoload.php';

use App\OOP\PHP\Relationship\Composition\House;
use App\OOP\PHP\Relationship\Composition\Room;
use App\OOP\PHP\Relationship\Composition\CPU;
use App\OOP\PHP\Relationship\Composition\RAM;
use App\OOP\PHP\Relationship\Composition\ComputerMachine;

$room1 = new Room('White', 20);
$room2 = new Room('LightGray', 30);
$room3 = new Room('LightBlue', 25);

$house = new House([$room1, $room2, $room3]);

$cpu = new CPU(3.6);
$ram = new RAM(8);
$pc = new ComputerMachine($cpu, $ram);

var_dump($pc->dashboard());

// Inheritance IS-A
// Manager IS-A Employee
// Aggregation HAS-A
// Project HAS-A Developer
// Composition PART-OF
// Room PART-OF House
// CPU PART-OF ComputerMachine