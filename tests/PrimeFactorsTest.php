<?php

class PrimeFactorsTest extends PHPUnit_Framework_TestCase
{
    private $primeFactors;

    public function setUp()
    {
        $this->primeFactors = new PrimeFactors();
    }

    public function test_it_returns_an_empty_array_for_1()
    {
        $this->assertEquals([], $this->primeFactors->generate(1));
    }

	function it_computes_prime_factors_of_2()
	{
        $this->assertEquals([2], $this->primeFactors->generate(2));
	}

	function it_computes_prime_factors_of_3()
	{
        $this->assertEquals([3], $this->primeFactors->generate(3));
	}

	function it_computes_prime_factors_of_4()
	{
        $this->assertEquals([2, 2], $this->primeFactors->generate(4));
	}

	function it_computes_prime_factors_of_5()
	{
        $this->assertEquals([5], $this->primeFactors->generate(5));
	}

	function it_computes_prime_factors_of_6()
	{
        $this->assertEquals([2, 3], $this->primeFactors->generate(6));
	}

	function it_computes_prime_factors_of_8()
	{
        $this->assertEquals([2, 2, 2], $this->primeFactors->generate(8));
	}

	function it_computes_prime_factors_of_9()
	{
        $this->assertEquals([3, 3], $this->primeFactors->generate(9));
	}

	function it_computes_prime_factors_of_100()
	{
        $this->assertEquals([2, 2, 5, 5], $this->primeFactors->generate(100));
	}
}
