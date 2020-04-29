<?php
namespace App\Patterns\Creational\Prototype\Employee;

class ProfileData
{
    private string $name = 'Employee Name';
    private int $age;
    private ?Address $address;
    private string $telephoneNumber;
    private string $mobileNumber;
    private string $slackAccountName;

    /**
     * ProfileData constructor.
     * @param string $name
     * @param int $age
     * @param Address|null $address
     * @param string $telephoneNumber
     * @param string $mobileNumber
     * @param string $slackAccountName
     */
    public function __construct(string $name, int $age, ?Address $address, string $telephoneNumber, string $mobileNumber, string $slackAccountName)
    {
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
        $this->telephoneNumber = $telephoneNumber;
        $this->mobileNumber = $mobileNumber;
        $this->slackAccountName = $slackAccountName;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @return Address
     */
    public function getAddress(): Address
    {
        return $this->address;
    }

    /**
     * @return string
     */
    public function getTelephoneNumber(): string
    {
        return $this->telephoneNumber;
    }

    /**
     * @return string
     */
    public function getMobileNumber(): string
    {
        return $this->mobileNumber;
    }

    /**
     * @return string
     */
    public function getSlackAccountName(): string
    {
        return $this->slackAccountName;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @param int $age
     */
    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    /**
     * @param Address|null $address
     */
    public function setAddress(?Address $address): void
    {
        $this->address = $address;
    }

    /**
     * @param string $telephoneNumber
     */
    public function setTelephoneNumber(string $telephoneNumber): void
    {
        $this->telephoneNumber = $telephoneNumber;
    }

    /**
     * @param string $mobileNumber
     */
    public function setMobileNumber(string $mobileNumber): void
    {
        $this->mobileNumber = $mobileNumber;
    }

    /**
     * @param string $slackAccountName
     */
    public function setSlackAccountName(string $slackAccountName): void
    {
        $this->slackAccountName = $slackAccountName;
    }
}