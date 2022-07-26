<?php

namespace App;

class Multiple
{
    public int $limiter;
    public array $multiples;

    public function __construct(int $limiter = 1000)
    {
        $this->limiter = $limiter;
    }

    public function getMultiples(): array
    {
        $values = [];
        for ($i = 0; $i < $$this->limiter; $i++) {
            $values[] = (($this->isMultiple(3, $i) == true) && ($this->isMultiple(5, $i) == true) ?: $i);
        }
        return $values;
    }

    public function isMultiple(int $divisor, int $value)
    {
        if ($value % $divisor == 0) {
            return true;
        }
        return false;
    }

    public function setMultiples(array $value)
    {
        $this->multiples = $value;
    }

    public function setLimiter(int $value)
    {
        $this->limiter = $value;
    }
}
