<?php

class RomanNumeralsTest extends PHPUnit_Framework_TestCase
{
    private $converter;

    public function setUp()
    {
        $this->converter = new RomanNumeralsConverter();
    }

    public function test_0_converts_to_null()
    {
        $this->assertEquals(null, $this->converter->convert(0));
    }

    public function test_1_converts_to_I()
    {
        $this->assertEquals('I', $this->converter->convert(1));
    }

    public function test_5_converts_to_V()
    {
        $this->assertEquals('V', $this->converter->convert(5));
    }

    public function test_9_converts_to_IX()
    {
        $this->assertEquals('IX', $this->converter->convert(9));
    }

    public function test_36_converts_to_XXXVI()
    {
        $this->assertEquals('XXXVI', $this->converter->convert(36));
    }

    public function test_2012_converts_to_XXXVI()
    {
        $this->assertEquals('MMXII', $this->converter->convert(2012));
    }

    public function test_1996_converts_to_MCMXCVI()
    {
        $this->assertEquals('MCMXCVI', $this->converter->convert(1996));
    }
}
