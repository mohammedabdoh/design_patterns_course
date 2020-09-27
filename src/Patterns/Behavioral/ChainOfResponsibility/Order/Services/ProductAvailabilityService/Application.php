<?php

namespace App\Patterns\Behavioral\ChainOfResponsibility\Order\Services\ProductAvailabilityService;

use App\Patterns\Behavioral\ChainOfResponsibility\Order\Product;

class Application
{
    private array $productsAvailability = [
        'PRD-1' => 10,
        'PRD-2' => 73,
        'PRD-3' => 0,
    ];

    public function isProductAvailable(Product $product): bool
    {
        return $this->productsAvailability[$product->getId()] > 0;
    }
}