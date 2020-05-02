<?php

require_once __DIR__.'/../vendor/autoload.php';

use App\Patterns\Structural\Bridge\Grades\Grade1Report;
use App\Patterns\Structural\Bridge\Reports\HTMLReport;
use App\Patterns\Structural\Bridge\Reports\XMLReport;
use App\Patterns\Structural\Bridge\Reports\PlainTextReport;

$reportTool = new Grade1Report(new HTMLReport());
echo $reportTool->showReport();

$reportTool->setReport(new XMLReport());
echo $reportTool->showReport();

$reportTool->setReport(new PlainTextReport());
echo $reportTool->showReport();