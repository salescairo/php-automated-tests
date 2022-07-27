<?php

namespace tests\Unit;

use App\Multiple;
use PHPUnit\Framework\TestCase;

class MultipleTest extends TestCase
{

    public function test_if_multiple_value()
    {
        $multiple = new Multiple();
        $this->assertEquals($multiple->isMultiple(5,10),true);
    }

    public function test_values_multiples()
    {
        $multiple = new Multiple(10);
        $threeAndFive = $multiple->getThreeOrFiveMultiples();
        $this->assertEquals(array_diff([3,5,6,9],$threeAndFive),[]);
    }
    

    public function test_count_third_and_five_value_multiples()
    {
        $multiple = new Multiple(1000);
        $threeAndFive = $multiple->getThreeAndFiveMultiples();
        $this->assertEquals(count($threeAndFive),66);
    }
    public function test_sum_third_and_five_values_multiples()
    {
        $multiple = new Multiple(16);
        $total = $multiple->getThreeAndFiveMultiplesSum();
        $this->assertEquals($total,15);
    }


    public function test_count_third_or_five_value_multiples()
    {
        $multiple = new Multiple(1000);
        $threeAndFive = $multiple->getThreeOrFiveMultiples();
        $this->assertEquals(count($threeAndFive),466);
    }

    public function test_sum_third_or_five_values_multiples()
    {
        $multiple = new Multiple(10);
        $total = $multiple->getThreeOrFiveMultiplesSum();
        $this->assertEquals($total,23);
    }



    public function test_count_third_or_five_and_seven_value_multiples()
    {
        $multiple = new Multiple(80);
        $threeAndFive = $multiple->getThreeOrFiveAndSevenMultiples();
        $this->assertEquals(count($threeAndFive),5);
    }

    public function test_sum_third_or_five_and_seven_values_multiples()
    {
        $multiple = new Multiple(80);
        $total = $multiple->getThreeOrFiveAndSevenMultiplesSum();
        $this->assertEquals($total,231);
    }
}
