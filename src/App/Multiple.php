<?php

namespace App;

class Multiple
{
    public int $limiter;
    public array $multiples;

    public function __construct(int $limiter = 10)
    {
        $this->limiter = $limiter;
    }

    public function getThreeAndFiveMultiples(): array
    {
        $values = [];
        for ($i = 1; $i < $this->limiter; $i++) {
            if ($this->isMultiple(3, $i) == true && $this->isMultiple(5, $i) == true) {
                $values[] = $i;
            }
        }
        return $values;
    }

    public function getThreeOrFiveMultiples(): array
    {
        $values = [];
        for ($i = 1; $i < $this->limiter; $i++) {
            if ($this->isMultiple(3, $i) == true || $this->isMultiple(5, $i) == true) {
                $values[] = $i;
            }
        }
        return $values;
    }

    public function getThreeOrFiveAndSevenMultiples(): array
    {
        $values = [];
        for ($i = 1; $i < $this->limiter; $i++) {
            if (($this->isMultiple(3, $i) == true || $this->isMultiple(5, $i) == true) &&  $this->isMultiple(7, $i) == true) {
                $values[] = $i;
            }
        }
        return $values;
    }

    public function getThreeAndFiveMultiplesSum(): int
    {
        $total = 0;
        foreach($this->getThreeAndFiveMultiples() as $key => $value) {
            $total += $value;
        }
        return $total;
    }

    public function getThreeOrFiveMultiplesSum(): int
    {
        $total = 0;
        foreach($this->getThreeOrFiveMultiples() as $key => $value) {
            $total += $value;
        }
        return $total;
    }
    public function getThreeOrFiveAndSevenMultiplesSum(): int
    {
        $total = 0;
        foreach($this->getThreeOrFiveAndSevenMultiples() as $key => $value) {
            $total += $value;
        }
        return $total;
    }

    public function isMultiple(int $divisor, int $value)
    {
        if ($value % $divisor == 0) {
            return true;
        }
        return false;
    }

    /**
     * GET AND SET
     */

    public function getMultiples(): array
    {
        return $this->multiples;
    }

    public function setMultiples(array $value)
    {
        $this->multiples = $value;
    }

    public function getLimiter(): int
    {
        return $this->limiter;
    }
    public function setLimiter(int $value)
    {
        $this->limiter = $value;
    }
}
