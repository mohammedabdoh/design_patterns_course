<?php
namespace App\Patterns\Structural\Proxy\RouterInterface\Clients;

use DateTime;

class Application1 extends Application
{
    private DateTime $initializedAt;

    /**
     * Application1 constructor.
     * @param DateTime $initializedAt
     * @param string $appName
     */
    public function __construct(DateTime $initializedAt, string $appName = 'APP_1')
    {
        parent::__construct($appName);
        $this->initializedAt = $initializedAt;
    }


}