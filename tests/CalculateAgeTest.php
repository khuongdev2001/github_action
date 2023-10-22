<?php

namespace tests;

use PHPUnit\Framework\TestCase;
use app\CalculateAge;

final class CalculateAgeTest extends TestCase
{
    public function testCalculate()
    {
        $calculate = new CalculateAge();
        $this->assertSame(3, $calculate->calculate(1, 2));
    }
}
