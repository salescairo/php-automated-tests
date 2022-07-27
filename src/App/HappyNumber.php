<?php

namespace App;

use SebastianBergmann\Environment\Console;

class HappyNumber
{
    public array $histories = [];
    public array $digits;


    public function isHappyNumber(int $value): bool
    {
        $status = false;
        while ($value != 1 && $this->isRepeated($value) == false) {
            $value = $this->getSunNumbers($value);
        }
        ($value != 1) ?: $status = true;
        return $status;
    }

    public function getSunNumbers(int $number): int
    {
        $total = 0;
        $digits = array_map('intval', str_split($number));
        foreach ($digits as $item => $value) {
            $total += ($value * $value);
        }
        $this->addHistory($number);
        return $total;
    }

    public function isRepeated($number): bool
    {
        if (array_search($number, $this->getHistories()) != null) {
            return true;
        }
        return false;
    }

    public function addHistory($value): void
    {
        $this->histories[] = $value;
    }
    public function getHistories(): array
    {
        return $this->histories;
    }
}
