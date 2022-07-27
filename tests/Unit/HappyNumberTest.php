<?php

namespace tests\Unit;

use App\HappyNumber;
use PHPUnit\Framework\TestCase;

class HappyNumberTest extends TestCase
{

    public function test_if_value_is_happy_number()
    {
        $happyNumber = new HappyNumber();
        $happyNumber->setHappyNumber(7);
        $this->assertEquals($happyNumber->isHappyNumber(),true);
    }

}
