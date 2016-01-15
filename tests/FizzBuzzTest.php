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
        $result = $this->fizzBuzz->execute(1);
        $this->assertEquals($result, 1);
    }

    public function test2Translates2ForFizzbuzz()
    {
        $result = $this->fizzBuzz->execute(2);
        $this->assertEquals($result, 2);
    }

    public function test3TranslatesFizzForFizzbuzz()
    {
        $result = $this->fizzBuzz->execute(3);
        $this->assertEquals($result, 'fizz');
    }

    public function test99TranslatesFizzForFizzbuzz()
    {
        $result = $this->fizzBuzz->execute(99);
        $this->assertEquals($result, 'fizz');
    }

    public function test5TranslatesBuzzForFizzbuzz()
    {
        $result = $this->fizzBuzz->execute(5);
        $this->assertEquals($result, 'buzz');
    }

    public function test10TranslatesBuzzForFizzbuzz()
    {
        $result = $this->fizzBuzz->execute(10);
        $this->assertEquals($result, 'buzz');
    }

    public function test15TranslatesFizzBuzzForFizzbuzz()
    {
        $result = $this->fizzBuzz->execute(15);
        $this->assertEquals($result, 'fizzbuzz');
    }

    public function testItTranslatesASequenceIfNumbersForFizzbuzz()
    {
        $result = $this->fizzBuzz->executeUpTo(5);
        $this->assertEquals($result, [1, 2, 'fizz', 4, 'buzz']);
    }
}
