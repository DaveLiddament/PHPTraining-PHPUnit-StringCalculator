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



    public function invalidDataProvider()
    {
        return [
            [4.3],
            ["1,hello,3"],
        ];
    }

    /**
     * @dataProvider invalidDataProvider
     * @expectedException \InvalidArgumentException
     */
    public function testNonStringSupplied($invalidData)
    {
        $this->calculator->add($invalidData);
    }


    public function testSemiColonDelimiter()
    {
        $actualValue = $this->calculator->add('5;6', ';');
        $this->assertSame(11, $actualValue);
    }
}