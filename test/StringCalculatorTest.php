<?php

namespace Training\PHPUnit\StringCalculator\Test;


use Training\PHPUnit\StringCalculator\StringCalculator;

class StringCalculatorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var StringCalculator
     */
    private $calculator;

    public function setUp()
    {
        $this->calculator = new StringCalculator();
    }


    public function happyPathDataProvider()
    {
        return [
            ["", 0],
            ["2", 2],
            ["2,3", 5],
            ["2,-3,4", 6],
        ];
    }

    /**
     * @dataProvider happyPathDataProvider
     */
    public function testHappyPath($input, $expected)
    {
        $actualValue = $this->calculator->add($input);
        $this->assertSame($expected, $actualValue);
    }


    /**
     * @expectedException \InvalidArgumentException
     */
    public function testNonStringSupplied()
    {
        $this->calculator->add(4.3);
    }


    /**
     * @expectedException \InvalidArgumentException
     */
    public function testNonNumericItemSupplied()
    {
        $this->calculator->add("1,hello,3");
    }


    public function testSemiColonDelimiter()
    {
        $actualValue = $this->calculator->add('5;6', ';');
        $this->assertSame(11, $actualValue);
    }
}