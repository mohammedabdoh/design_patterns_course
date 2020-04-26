<?php

require_once __DIR__.'/../vendor/autoload.php';

use App\Patterns\Creational\FactoryMethod\ContentValidator\AppViewer\HTMLAppViewer;
use App\Patterns\Creational\FactoryMethod\ContentValidator\AppViewer\XMLAppViewer;

$htmlViewer = new HTMLAppViewer();
var_dump($htmlViewer->viewContentOnScreen());

$xmlViewer = new XMLAppViewer();
var_dump($xmlViewer->viewContentOnScreen());