<?php

class RomanNumeralsTest extends PHPUnit_Framework_TestCase
{
    private $converter;

    public function setUp()
    {
        $this->converter = new RomanNumeralsConverter();
    }

    public function test_1_to_I()
    {
        $this->assertEquals('I', $this->converter->convert(1));
    }

}
