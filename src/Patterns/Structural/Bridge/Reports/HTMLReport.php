<?php
namespace App\Patterns\Structural\Bridge\Reports;

class HTMLReport implements ReportBridge
{

    public function showGrade1Report(): string
    {
        return "<h1>This is a grade 1 report</h1>\n";
    }

    public function showGrade2Report(): string
    {
        return "<h1>This is a grade 2 report</h1>\n";
    }

    public function showGrade3Report(): string
    {
        return "<h1>This is a grade 3 report</h1>\n";
    }
}