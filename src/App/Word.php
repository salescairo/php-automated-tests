<?php

namespace App;

class Word
{
    public array $singular = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
    public array $plural =   ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];


    public function getCollectionSize($words): int
    {
        $size = 0;
        $wordSize = $this->getWordSizeCollection($this->getCollection($words));
        foreach ($wordSize as $key => $value) {
            $size += $value;
        }
        return $size;
    }
    public function getCollection($words):array
    {
        return explode(' ', $words);
    }

    public function getWordSizeCollection($words): array
    {
        $collection = [];
        foreach ($words as $word) {
            $collection[] = $this->getWordSize($word);
        }
        return $collection;
    }

    public function getWordSize($word)
    {
        $sum = 0;
        foreach ($this->getWordCollections($word) as $key => $value) {
            $sum += $this->getValueLetter($value, $this->getLetterCollection($value));
        }
        return $sum;
    }

    public function getWordCollections($word): array
    {
        return array_map('strval', str_split($word));
    }

    public function getValueLetter($letter, $collection): int
    {
        return (array_search($letter, $collection) + 1);
    }

    public function getLetterCollection($letter): array
    {
        if ($letter === strtoupper($letter)) {
            return $this->plural;
        }
        return $this->singular;
    }

    public function isSingularLetter($letter): bool
    {
        if ($letter === strtoupper($letter)) {
            return false;
        }
        return true;
    }
}
