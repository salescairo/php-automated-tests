<?php
namespace App\Ecommerce;

class User{

    public string $name;
    public string $address;

    public function setName(string $value): void
    {
        $this->name = $value;
    }
    
    public function setAddress(string $value): void
    {
        $this->address = $value;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAddress(): string
    {
        return $this->address;
    }
}