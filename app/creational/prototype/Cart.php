<?php

declare(strict_types=1);

namespace app\creational\prototype;

final class Cart
{
    /**
     * @var ProductPrototype[]
     */
    private array $products;

    public function addProduct(ProductPrototype $product): void
    {
        $this->products[] = $product;
    }

    /**
     * @return ProductPrototype[]
     */
    public function getProducts(): array
    {
        return $this->products;
    }
}
