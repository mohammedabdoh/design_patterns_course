<?php
namespace App\OOP\Concepts;

class Salary
{
    protected float $salary;
    protected float $tax;
    protected int $absent;
    protected int $overTime;
    protected int $overTimeRate;
    protected int $absenceRate;

    /**
     * Salary constructor.
     * @param float $salary
     * @param float $tax
     * @param int $absent
     * @param int $overTime
     * @param int $overTimeRate
     * @param int $absenceRate
     */
    public function __construct(float $salary, float $tax, int $absent, int $overTime, int $overTimeRate, int $absenceRate)
    {
        $this->salary = $salary;
        $this->tax = $tax;
        $this->absent = $absent;
        $this->overTime = $overTime;
        $this->overTimeRate = $overTimeRate;
        $this->absenceRate = $absenceRate;
    }

    public function calculateSalary(): float
    {
        return $this->salary - ($this->salary * $this->tax);
    }
}