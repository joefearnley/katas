<?php

class FibinacciTest extends PHPUnit_Framework_TestCase
{
	private $fibinacci;

	public function setUp()
	{
		$this->fibinacci = new Fibonacci();
	}

	public function test_it_calculates_0_as_0()
	{
		$this->assertEquals(0, $this->fibinacci->calculate(0));
		$this->assertEquals(0, $this->fibinacci->calculateUsingRecursion(0));
	}

	public function test_it_calculates_1_as_1()
	{
		$this->assertEquals(1, $this->fibinacci->calculate(1));
		$this->assertEquals(1, $this->fibinacci->calculateUsingRecursion(1));
	}

	public function test_it_calculates_4_as_3()
	{
		$this->assertEquals(3, $this->fibinacci->calculate(4));
		$this->assertEquals(3, $this->fibinacci->calculateUsingRecursion(4));
	}

	public function test_it_calculates_15_as_610()
	{
		$this->assertEquals(610, $this->fibinacci->calculate(15));
		$this->assertEquals(610, $this->fibinacci->calculateUsingRecursion(15));
	}

	public function test_it_calculates_17_as_1597()
	{
		$this->assertEquals(1597, $this->fibinacci->calculate(17));
		$this->assertEquals(1597, $this->fibinacci->calculateUsingRecursion(17));
	}

	public function test_it_calculates_20_as_6765()
	{
		$this->assertEquals(6765, $this->fibinacci->calculate(20));
		$this->assertEquals(6765, $this->fibinacci->calculateUsingRecursion(20));
	}

}
