<?php

namespace App\Ecommerce;

class Product
{

    public string $name;
    public float $value;

    public function __construct(string $name,float $value)
    {
        $this->name = $name;
        $this->value = $value;
    }

    public function setName(string $value): void
    {
        $this->name = $value;
    }
    public function setValue(float $value): void
    {
        $this->value = $value;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getValue(): float
    {
        return $this->value;
    }
}
