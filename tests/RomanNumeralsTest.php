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
        $this->assertEquals(null, $this->converter->convertToNumeral(0));
    }

    public function test_1_converts_to_I()
    {
        $this->assertEquals('I', $this->converter->convertToNumeral(1));
    }

    public function test_5_converts_to_V()
    {
        $this->assertEquals('V', $this->converter->convertToNumeral(5));
    }

    public function test_9_converts_to_IX()
    {
        $this->assertEquals('IX', $this->converter->convertToNumeral(9));
    }

    public function test_36_converts_to_XXXVI()
    {
        $this->assertEquals('XXXVI', $this->converter->convertToNumeral(36));
    }

    public function test_2012_converts_to_MMXII()
    {
        $this->assertEquals('MMXII', $this->converter->convertToNumeral(2012));
    }

    public function test_1996_converts_to_MCMXCVI()
    {
        $this->assertEquals('MCMXCVI', $this->converter->convertToNumeral(1996));
    }


    public function test_empty_converts_to_0()
    {
        $this->assertEquals(0, $this->converter->convertToNumber(''));
    }

    public function test_I_converts_to_1()
    {
        $this->assertEquals(1, $this->converter->convertToNumber('I'));
    }

    public function test_V_converts_to_5()
    {
        $this->assertEquals(5, $this->converter->convertToNumber('V'));
    }

    public function test_IX_converts_to_9()
    {
        $this->assertEquals(9, $this->converter->convertToNumber('IX'));
    }

    public function test_XXXVI_converts_to_36()
    {
        $this->assertEquals(36, $this->converter->convertToNumber('XXXVI'));
    }

    public function test_MMXII_converts_to_2012()
    {
        $this->assertEquals(2012, $this->converter->convertToNumber('MMXII'));
    }

    public function test_MCMXCVI_converts_to_1996()
    {
        $this->assertEquals(1996, $this->converter->convertToNumber('MCMXCVI'));
    }
}
