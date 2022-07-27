<?php

namespace App;

class Number
{
    public function isPrimeNumber($number): bool
    {
        $status = false;
        foreach (array(2, 3, 5) as $key => $value) {
            ($number % $value === 0 && $number > 5) ? $status = false : $status = true;
        }
        return $status;
    }
}
