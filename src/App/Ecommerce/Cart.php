<?php

namespace App\Ecommerce;

class Cart
{

    public User $user;
    public array $items;

    public function setUser(User $value): void
    {
        $this->user = $value;
    }

    public function setItems(array $value): void
    {
        $this->items = $value;
    }

    public function getUser(): User
    {
        return $this->user;
    }
    public function getItems(): array
    {
        return $this->items;
    }

    public function getTotalItems(): int
    {
        return 0;
    }

    public function getTotalValue(): float
    {
        $value = 0.0;
        foreach($this->getItems() as $card){
            $value += $card->getTotal();
        }
        return $value;
    }

    public function addItem(Product $product, int $quantity): bool
    {
        $cartItem =  new CartItem($product, $quantity);
        if ($this->isExists($cartItem) == true) {
            $this->replaceItem($cartItem);
        } else {
            $this->items[] = $cartItem;
        }
        return true;
    }

    public function replaceItem(CartItem $cartItem): void
    {
        $this->items[$this->getDuplicateCartItem($cartItem)] = $cartItem;
    }

    public function getDuplicateCartItem(CartItem $cartItem): int
    {
        return array_search($cartItem, $this->getItems());
    }

    public function isExists(CartItem $cartItem): bool
    {
        return in_array($cartItem, $this->getItems());
    }
}
