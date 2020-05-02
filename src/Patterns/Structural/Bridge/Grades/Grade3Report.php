<?php
namespace App\Patterns\Structural\Bridge\Grades;

class Grade3Report extends GradeReport
{
    public function showReport(): string
    {
        return $this->getReport()->showGrade3Report();
    }
}