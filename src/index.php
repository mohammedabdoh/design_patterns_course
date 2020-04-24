<?php

require_once __DIR__.'/../vendor/autoload.php';

use App\OOP\PHP\Relationship\ScienceTeacher;
use App\OOP\PHP\Relationship\MathTeacher;
use App\OOP\PHP\Relationship\Printer\HTMLPrinter;
use App\OOP\PHP\Relationship\Student;

$mohammed = new ScienceTeacher('Mohammed Abdoh');
$ibrahim = new MathTeacher('Ibrahim Mohammed');

//$printer = new HTMLPrinter();
//var_dump($mohammed->sayWelcome($printer));
//unset($mohammed);
//$printer->setStringToBePrinted('This is a test string');
//var_dump($printer->printToScreen());

$ahmed = new Student('Ahmed Ali');
$ahmed->assignATempTeacher($mohammed);
var_dump('Ahmed was assigned this by ' . $mohammed->getName() . ' | ' . $mohammed->evaluateStudentHomeWork($ahmed));
$ahmed->assignATempTeacher($ibrahim);
var_dump('Ahmed was assigned this by ' . $ibrahim->getName() . ' | ' . $ibrahim->evaluateStudentHomeWork($ahmed));
