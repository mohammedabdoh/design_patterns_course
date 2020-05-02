<?php
namespace App\Patterns\Structural\Bridge\Grades;

class Grade1Report extends GradeReport
{
    public function showReport(): string
    {
        return $this->getReport()->showGrade1Report();
    }
}