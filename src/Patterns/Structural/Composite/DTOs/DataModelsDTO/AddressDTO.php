<?php
namespace App\Patterns\Structural\Composite\DTOs\DataModelsDTO;

use App\Patterns\Structural\Composite\DTOs\DTOModel;

class AddressDTO implements DTOModel
{
    private string $streetName;
    private string $houseNumber;
    private string $zipCode;

    /**
     * AddressDTO constructor.
     * @param string $streetName
     * @param string $houseNumber
     * @param string $zipCode
     */
    public function __construct(string $streetName, string $houseNumber, string $zipCode)
    {
        $this->streetName = $streetName;
        $this->houseNumber = $houseNumber;
        $this->zipCode = $zipCode;
    }

    /**
     * @return string
     */
    public function getStreetNumber(): string
    {
        return $this->streetName;
    }

    /**
     * @return string
     */
    public function getHouseNumber(): string
    {
        return $this->houseNumber;
    }

    /**
     * @return string
     */
    public function getZipCode(): string
    {
        return $this->zipCode;
    }

    public function render(): array
    {
        return [
            'streetName' => $this->getStreetNumber(),
            'houseNumber' => $this->getHouseNumber(),
            'zipCode' => $this->getZipCode()
        ];
    }
}