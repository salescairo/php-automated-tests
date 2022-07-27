<?php

namespace App\Ecommerce;

class CartItem
{

    public Product $product;
    public int $quantity;

    public function __construct(Product $product, int $quantity)
    {
        $this->product = $product;
        $this->quantity = $quantity;
    }

    public function setProduct(Product $value): void
    {
        $this->product = $value;
    }

    public function setQuantity(int $value): void
    {
        $this->quantity =  $value;
    }


    public function getProduct(): Product
    {
        return $this->product;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function getTotal(): float
    {
        return ($this->product->getValue() * $this->quantity);
    }
}
