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

    public function getWordPrimeNumbers($words): array
    {
        $sizes = [];
        $word = new Word();
        foreach ($word->getWordSizeCollection($word->getCollection($words)) as $key => $value) {
            $sizes[] =  ($this->isPrimeNumber($value)) ? true : false;
        }
        return $sizes;
    }
    public function getWordHappyNumbers($words): array
    {
        $sizes = [];
        $word = new Word();
        $happyNumber = new HappyNumber();
        foreach ($word->getWordSizeCollection($word->getCollection($words)) as $key => $value) {
            $sizes[] =  ($happyNumber->isHappyNumber($value)) ? true : false;
        }
        return $sizes;
    }
    public function getWordThirdOrFiveMultiples($words): array
    {
        $sizes = [];
        $word = new Word();
        $multiple = new Multiple();
        foreach ($word->getWordSizeCollection($word->getCollection($words)) as $key => $value) {
           $sizes[] =  ($multiple->isThreeOrFiveMultiple($value)) ? true :false;
        }
        return $sizes;
    }
}
