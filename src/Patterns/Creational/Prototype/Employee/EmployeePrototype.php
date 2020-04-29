<?php
namespace App\Patterns\Creational\Prototype\Employee;

use App\Patterns\Creational\Prototype\Employee\Privileges\Privileges;
use App\Patterns\Creational\Prototype\Employee\Privileges\Types\ServerRoomPrivilege;
use App\Patterns\Creational\Prototype\Employee\Privileges\Types\WebProjectPrivilege;

class EmployeePrototype implements Prototype
{
    private ProfileData $profileData;
    private Salary $salary;
    private Privileges $privileges;

    /**
     * EmployeePrototype constructor.
     * @param ProfileData $profileData
     * @param Salary $salary
     * @param Privileges $privileges
     */
    public function __construct(ProfileData $profileData, Salary $salary, Privileges $privileges)
    {
        $this->profileData = $profileData;
        $this->salary = $salary;
        $this->privileges = $privileges;
    }

    /**
     * @return ProfileData
     */
    public function getProfileData(): ProfileData
    {
        return $this->profileData;
    }

    /**
     * @return Salary
     */
    public function getSalary(): Salary
    {
        return $this->salary;
    }

    /**
     * @return Privileges
     */
    public function getPrivileges(): Privileges
    {
        return $this->privileges;
    }

    public function __clone()
    {
        $this->privileges->clearPrivileges();
        $this->privileges->addPrivilege(new WebProjectPrivilege());
        $this->privileges->addPrivilege(new ServerRoomPrivilege());

        $this->salary->setTax(0.1);
        $this->salary->setSalary(1500);
        $this->salary->setMedicalInsurance(200);

        $this->profileData->setAddress(null);
        $this->profileData->setAge(20);
        $this->profileData->setMobileNumber(0);
        $this->profileData->setTelephoneNumber(0);
        $this->profileData->setSlackAccountName('slack.account');
        $this->profileData->setName('Default Employee Name');

        return $this;

    }
}