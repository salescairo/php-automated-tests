<?php

namespace tests\Unit;

use App\HappyNumber;
use App\Word;
use PHPUnit\Framework\TestCase;

class WordNumberTest extends TestCase
{

    public function test_singular_letter_verification()
    {
        $word = new Word();
        $this->assertEquals($word->isSingularLetter('z'),true);
    }
    public function test_plural_letter_verification()
    {
        $word = new Word();
        $this->assertEquals($word->isSingularLetter('M'),false);
    }

    public function test_lower_word_size_verification()
    {
        $word = new Word();
        $this->assertEquals($word->getWordSize('2aba'),4);
    }
    public function test_upper_word_size_verification()
    {
        $word = new Word();
        $this->assertEquals($word->getWordSize('ADABE'),13);
    }
    

    public function test_word_size_coversion_is_happy_number()
    {
        $word = new Word();
        $size = $word->getWordSize('DAb');

        $happyNumber = new HappyNumber();
        $this->assertEquals($happyNumber->isHappyNumber($size),true);
    }

    public function test_word_size_coversion_is_not_happy_number()
    {
        $word = new Word();
        $this->assertEquals($word->getWordPrimeNumbers('aacb bbba eb'),[true,true,true]);
    }
    
    public function test_word_size_coversion_is_prime_number()
    {
        $word = new Word();
        $this->assertEquals($word->getWordPrimeNumbers('aacb bbba eb'),[true,true,true]);
    }

    public function test_word_size_coversion_is_three_or_five_multiple()
    {
        $word = new Word();
        $this->assertEquals($word->getWordThirdOrFiveMultiples('jjj eee je ja'),[true,true,true,false]);
    }
    

}
