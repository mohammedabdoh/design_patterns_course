<?php
namespace App\Patterns\Structural\Composite\DTOs\DataModelsDTO;

use App\Patterns\Structural\Composite\DTOs\DTOModel;

class OrderOwnerDTO implements DTOModel
{
    private string $name;
    private DTOModel $address;

    /**
     * OrderOwnerDTO constructor.
     * @param string $name
     * @param AddressDTO $address
     */
    public function __construct(string $name, AddressDTO $address)
    {
        $this->name = $name;
        $this->address = $address;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return AddressDTO
     */
    public function getAddress(): AddressDTO
    {
        return $this->address;
    }

    public function render(): array
    {
        return [
            'name' => $this->getName(),
            'address' => $this->getAddress()->render()
        ];
    }
}