<?php

class StringCalculatorTest extends PHPUnit_Framework_TestCase
{
    private $stringCalculator;

    public function setUp()
    {
        $this->stringCalculator = new StringCalculator();
    }

    public function test_it_translates_empty_string_to_zero()
    {
        $this->assertEquals(0, $this->stringCalculator->add('0'));
    }

    public function test_it_calculates_0()
    {
        $this->assertEquals(0, $this->stringCalculator->add('0'));
    }

    public function test_it_only_calculates_3_numbers()
    {
        $this->assertEquals(10, $this->stringCalculator->add('0,1,2,3,4'));
    }

    public function test_it_calculates_1()
    {
        $this->assertEquals(1, $this->stringCalculator->add('0,1'));
    }

    public function test_it_calculates_6()
    {
        $this->assertEquals(6, $this->stringCalculator->add('1,2,3'));
    }

    public function test_it_disallows_negative_numbers()
    {
        $this->assertEquals(0, $this->stringCalculator->add('-1,2'));
    }

    public function test_it_ignores_numbers_greater_than_1000()
    {
        $this->assertEquals(16, $this->stringCalculator->add('1011,2,5,9'));
    }

    public function test_it_allows_different_delimters()
    {
        $this->assertEquals(16, $this->stringCalculator->add('2,5\n9'));
    }
}
