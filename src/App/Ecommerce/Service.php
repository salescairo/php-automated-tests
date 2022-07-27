<?php
namespace App\Ecommerce;

class Service{

    public Cart $cart;

    public function setCart(Cart $value): void
    {
        $this->cart = $value;
    }

    public function getCart(): Cart
    {
        return $this->cart;
    }

}