<?php
namespace App\Patterns\Structural\Composite\DTOs\DataModelsDTO;

use App\Patterns\Structural\Composite\DTOs\DTOModel;

class PurchaseBill implements DTOModel
{
    /** @var DTOModel[] */
    private array $orders;

    /**
     * PurchaseBill constructor.
     * @param DTOModel[]|array $orders
     */
    public function __construct($orders)
    {
        $this->orders = $orders;
    }

    public function addOrder(DTOModel $order)
    {
        array_push($this->orders, $order);
    }

    public function __toString()
    {
        return json_encode($this->render(), JSON_PRETTY_PRINT);
    }

    public function render(): array
    {
        return [
            'orders' => array_map(fn (DTOModel $order) => $order->render(), $this->orders)
        ];
    }
}