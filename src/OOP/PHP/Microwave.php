<?php


namespace App\OOP\PHP;

class Microwave
{
    private int $temp;
    private string $program;
    private int $time;

    private bool $status = false;

    /**
     * Microwave constructor.
     * @param int $temp
     * @param string $program
     * @param int $time
     */
    public function __construct(int $temp, string $program, int $time)
    {
        $this->temp = $temp;
        $this->program = $program;
        $this->time = $time;
    }

    public function turnOn(): bool
    {
        $this->status = true;
        return true;
    }

    public function turnOff(): bool
    {
        $this->status = false;
        return true;
    }

    public function deFreeze(): string
    {
        $this->turnOnMicrowaveHeatingSystem();
        $this->loadingDeFreezingProgram();
        $this->setTimer();
        return "I am de-freezing the food at {$this->temp} using the program {$this->program}";
    }

    private function turnOnMicrowaveHeatingSystem()
    {
        return "Starting on Heating System";
    }

    private function loadingDeFreezingProgram()
    {
        return "Loading program {$this->program}";
    }

    private function setTimer()
    {
        return "Setting de-freezing time to {$this->time} seconds";
    }
}