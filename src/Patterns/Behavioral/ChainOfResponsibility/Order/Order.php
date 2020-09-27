<?php

namespace App\Patterns\Behavioral\ChainOfResponsibility\Order;

class Order
{
    private User $user;
    private Product $product;
    private \DateTime $shipmentDate;

    /**
     * Order constructor.
     * @param User $user
     * @param Product $product
     * @param \DateTime $shipmentDate
     */
    public function __construct(User $user, Product $product, \DateTime $shipmentDate)
    {
        $this->user = $user;
        $this->product = $product;
        $this->shipmentDate = $shipmentDate;
    }

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * @return Product
     */
    public function getProduct(): Product
    {
        return $this->product;
    }

    /**
     * @return \DateTime
     */
    public function getShipmentDate(): \DateTime
    {
        return $this->shipmentDate;
    }
}