<?php

namespace Training\PHPUnit\StringCalculator\Test;


use Training\PHPUnit\StringCalculator\StringCalculator;

class StringCalculatorTest extends \PHPUnit_Framework_TestCase
{
    public function happyPathDataProvider()
    {
        return [
            ["", 0],
            ["2", 2],
            ["2,3", 5],
        ];
    }

    /**
     * @dataProvider happyPathDataProvider
     */
    public function testHappyPath($input, $expected)
    {
        $calculator = new StringCalculator();
        $actualValue = $calculator->add($input);
        $this->assertSame($expected, $actualValue);
    }


    /**
     * @expectedException \InvalidArgumentException
     */
    public function testNonStringSupplied()
    {
        $calculator = new StringCalculator();
        $calculator->add(4.3);
    }
}