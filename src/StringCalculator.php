<?php

class StringCalculator
{
	const MAX_NUMBER_ALLOWED = 999;

	public function add($numbers)
	{
		$numbers = preg_split('/\s*(,|\\\n)\s*/', $numbers);

		$total = 0;
		foreach ($numbers as $number) {
			if ($number < 0) {
				return 0;
			}

			if ($number <= self::MAX_NUMBER_ALLOWED) {
				$total += (int) $number;
			}
		}

		return $total;
	}
}
