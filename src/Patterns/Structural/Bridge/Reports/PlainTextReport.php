<?php
namespace App\Patterns\Structural\Bridge\Reports;

class PlainTextReport implements ReportBridge
{

    public function showGrade1Report(): string
    {
        return "This is a grade 1 report\n";
    }

    public function showGrade2Report(): string
    {
        return "This is a grade 2 report\n";
    }

    public function showGrade3Report(): string
    {
        return "This is a grade 3 report\n";
    }
}