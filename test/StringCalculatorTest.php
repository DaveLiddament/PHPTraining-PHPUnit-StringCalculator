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


    public function testStringWith1Digit()
    {
        $calculator = new StringCalculator();
        $actualValue = $calculator->add("2");
        $this->assertSame(2, $actualValue);
    }

    
    public function testStringWith2Digits()
    {
        $calculator = new StringCalculator();
        $actualValue = $calculator->add("2,3");
        $this->assertSame(5, $actualValue);
    }

}