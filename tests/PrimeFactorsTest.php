<?php

class PrimeFactorsTest extends PHPUnit_Framework_TestCase
{
    private $primeFactors;

    public function setUp()
    {
        $this->primeNumbers = new PrimeFactors();
    }

    public function test1()
    {
        $this->assertEquals(1, 1);
    }
}
