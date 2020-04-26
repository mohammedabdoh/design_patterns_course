<?php
namespace App\OOP\Relationship\Association;

class ScienceTeacher extends Teacher
{
    public function assignAHomeWork(): string
    {
        return "Prepare a research on plants";
    }
}