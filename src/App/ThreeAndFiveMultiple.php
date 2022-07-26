<?php

namespace App;

class ThreeAndFiveMultiple
{
    public int $limiter;
    public array $multiples;

    public function __construct(int $limiter = 1000)
    {
        $this->limiter = $limiter;
    }

    public function getThreeAndFiveMultiples(): array
    {
        $multiples = [];
        for ($i = 0; $i < $$this->limiter; $i++) {
            $multiples[] = (($this->isThreeAndFiveMultiple($i) == true) ?: $i);
        }
        return $multiples;
    }

    public function isThreeAndFiveMultiple(int $value)
    {
        if ($value % 3 != 0 && $value % 5 != 0) {
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
