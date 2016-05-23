<?php

namespace Training\PHPUnit\StringCalculator\Test;


use Training\PHPUnit\StringCalculator\StringCalculator;

class StringCalculatorTest extends \PHPUnit_Framework_TestCase
{
    public function testEmptyString()
    {
        $calculator = new StringCalculator();
        $actualValue = $calculator->add("");
        $this->assertSame(0, $actualValue);
    }

}