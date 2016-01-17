<?php

class FizzBuzzTest extends PHPUnit_Framework_TestCase
{
    private $fizzBuzz;

    public function setUp()
    {
        $this->fizzBuzz = new FizzBuzz();
    }

    public function test_1_translates_1_for_fizzbuzz()
    {
        $this->assertEquals(1, $this->fizzBuzz->execute(1));
    }

    public function test_2__translates_2_for_fizzbuzz()
    {
        $this->assertEquals(2, $this->fizzBuzz->execute(2));
    }

    public function test_3_translates_fizz_for_fizzbuzz()
    {
        $this->assertEquals('fizz', $this->fizzBuzz->execute(3));
    }

    public function test_99_translates_fizz_for_fizzbuzz()
    {
        $this->assertEquals('fizz', $this->fizzBuzz->execute(99));
    }

    public function test_5_translates_buzz_for_fizzbuzz()
    {
        $this->assertEquals('buzz', $this->fizzBuzz->execute(5));
    }

    public function test_10_translates_buzz_for_fizzbuzz()
    {
        $this->assertEquals('buzz', $this->fizzBuzz->execute(10));
    }

    public function test_15_translates_fizzbuzz_for_fizzbuzz()
    {
        $this->assertEquals('fizzbuzz', $this->fizzBuzz->execute(15));
    }

    public function test_it_translates_a_sequence_of_numbers_for_fizzbuzz()
    {
        $this->assertEquals([1, 2, 'fizz', 4, 'buzz'], $this->fizzBuzz->executeUpTo(5));
    }
}
