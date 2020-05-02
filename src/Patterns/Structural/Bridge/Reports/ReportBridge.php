<?php
namespace App\Patterns\Structural\Bridge\Reports;

interface ReportBridge
{
    public function showGrade1Report(): string;
    public function showGrade2Report(): string;
    public function showGrade3Report(): string;
}