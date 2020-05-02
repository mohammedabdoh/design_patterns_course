<?php
namespace App\Patterns\Structural\Bridge\Reports;

class XMLReport implements ReportBridge
{

    public function showGrade1Report(): string
    {
        return "<StudentReport>This is a grade 1 report</StudentReport>\n";
    }

    public function showGrade2Report(): string
    {
        return "<StudentReport>This is a grade 2 report</StudentReport>\n";
    }

    public function showGrade3Report(): string
    {
        return "<StudentReport>This is a grade 3 report</StudentReport>\n";
    }
}