<?php

class FizzBuzz
{
	private $fizzes;
	private $buzzes;
	private $fizzesAndBuzzes;

	public function execute($number)
	{
		if ($number % 3 == 0 && $number % 5 == 0 )
		{
			return 'fizzbuzz';
		}

		if ($number % 3 == 0)
		{
			return 'fizz';
		}

		if ($number % 5 == 0)
		{
			return 'buzz';
		}

		return $number;
	}

	public function executeUpTo($number)
	{
		$results = [];

		for($i = 1; $i <= $number; $i++)
		{
			$results[] = $this->execute($i);
		}

		return $results;
	}

	public function printUpTo($number)
	{
		$results = [];

		echo "\n\nStarting...\n";
		for($i = 1; $i <= $number; $i++)
		{
			echo $this->execute($i) . "\n";
		}
		echo "\nDone!\n\n";
	}
}
