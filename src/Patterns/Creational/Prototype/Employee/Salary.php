<?php
namespace App\Patterns\Creational\Prototype\Employee;

class Salary
{
    private float $salary;
    private float $tax;
    private float $medicalInsurance;

    /**
     * Salary constructor.
     * @param float $salary
     * @param float $tax
     * @param float $medicalInsurance
     */
    public function __construct(float $salary, float $tax, float $medicalInsurance)
    {
        $this->salary = $salary;
        $this->tax = $tax;
        $this->medicalInsurance = $medicalInsurance;
    }

    /**
     * @return float
     */
    public function getSalary(): float
    {
        return $this->salary;
    }

    /**
     * @return float
     */
    public function getTax(): float
    {
        return $this->tax;
    }

    /**
     * @return float
     */
    public function getMedicalInsurance(): float
    {
        return $this->medicalInsurance;
    }

    /**
     * @param float $salary
     */
    public function setSalary(float $salary): void
    {
        $this->salary = $salary;
    }

    /**
     * @param float $tax
     */
    public function setTax(float $tax): void
    {
        $this->tax = $tax;
    }

    /**
     * @param float $medicalInsurance
     */
    public function setMedicalInsurance(float $medicalInsurance): void
    {
        $this->medicalInsurance = $medicalInsurance;
    }
}