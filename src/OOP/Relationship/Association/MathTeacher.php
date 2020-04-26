<?php
namespace App\OOP\Relationship\Association;

class MathTeacher extends Teacher
{
    public function assignAHomeWork(): string
    {
        return "Calculate the sum of 10 and 12";
    }
}