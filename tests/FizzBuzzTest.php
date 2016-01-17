<?php

class FizzBuzzTest extends PHPUnit_Framework_TestCase
{
    private $fizzBuzz;

    public function setUp()
    {
        $this->fizzBuzz = new FizzBuzz();
    }

    public function test1Translates1ForFizzbuzz()
    {
        $this->assertEquals(1, $this->fizzBuzz->execute(1));
    }

    public function test2Translates2ForFizzbuzz()
    {
        $this->assertEquals(2, $this->fizzBuzz->execute(2));
    }

    public function test3TranslatesFizzForFizzbuzz()
    {
        $this->assertEquals('fizz', $this->fizzBuzz->execute(3));
    }

    public function test99TranslatesFizzForFizzbuzz()
    {
        $this->assertEquals('fizz', $this->fizzBuzz->execute(99));
    }

    public function test5TranslatesBuzzForFizzbuzz()
    {
        $this->assertEquals('buzz', $this->fizzBuzz->execute(5));
    }

    public function test10TranslatesBuzzForFizzbuzz()
    {
        $this->assertEquals('buzz', $this->fizzBuzz->execute(10));
    }

    public function test15TranslatesFizzBuzzForFizzbuzz()
    {
        $this->assertEquals('fizzbuzz', $this->fizzBuzz->execute(15));
    }

    public function testItTranslatesASequenceIfNumbersForFizzbuzz()
    {
        $this->assertEquals([1, 2, 'fizz', 4, 'buzz'], $this->fizzBuzz->executeUpTo(5));
    }
}
