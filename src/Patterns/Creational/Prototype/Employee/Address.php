<?php
namespace App\Patterns\Creational\Prototype\Employee;

class Address
{
    private float $longitude;
    private float $latitude;
    private string $streetName;
    private string $city;
    private string $country;
    private int $buildingNumber;
    private int $zipCode;

    /**
     * Address constructor.
     * @param float $longitude
     * @param float $latitude
     * @param string $streetName
     * @param string $city
     * @param string $country
     * @param int $buildingNumber
     * @param int $zipCode
     */
    public function __construct(float $longitude, float $latitude, string $streetName, string $city, string $country, int $buildingNumber, int $zipCode)
    {
        $this->longitude = $longitude;
        $this->latitude = $latitude;
        $this->streetName = $streetName;
        $this->city = $city;
        $this->country = $country;
        $this->buildingNumber = $buildingNumber;
        $this->zipCode = $zipCode;
    }

    /**
     * @return float
     */
    public function getLongitude(): float
    {
        return $this->longitude;
    }

    /**
     * @return float
     */
    public function getLatitude(): float
    {
        return $this->latitude;
    }

    /**
     * @return string
     */
    public function getStreetName(): string
    {
        return $this->streetName;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * @return int
     */
    public function getBuildingNumber(): int
    {
        return $this->buildingNumber;
    }

    /**
     * @return int
     */
    public function getZipCode(): int
    {
        return $this->zipCode;
    }
}