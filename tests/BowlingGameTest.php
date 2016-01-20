<?php

class BowlingGameTest extends PHPUnit_Framework_TestCase
{
	private $bowlingGame;

	public function setUp()
	{
		$this->bowlingGame = new BowlingGame();
	}

	public function test_gutter_game_as_0()
	{
		$this->rollTimes(20, 0);

		$this->assertEquals(0, $this->bowlingGame->score());
	}

	function test_it_scores_the_sum_of_all_knocked_down_pins_for_a_game()
	{
		$this->rollTimes(20, 1);

		$this->assertEquals(20, $this->bowlingGame->score());
	}

	function test_it_awards_a_one_roll_bonus_for_every_spare()
	{
		$this->rollSpare();
		$this->bowlingGame->roll(5);
		$this->rollTimes(17, 0);

		$this->assertEquals(20, $this->bowlingGame->score());
	}

	function test_it_awards_a_two_roll_bonus_for_a_strike_in_the_previous_frame()
	{
		$this->rollStrike(10);
		$this->bowlingGame->roll(7);
		$this->bowlingGame->roll(2);
		$this->rollTimes(17, 0);

		$this->assertEquals(28, $this->bowlingGame->score());
	}

	function it_scores_a_perfect_game()
	{
		$this->rollTimes(12, 10);

		$this->assertEquals(300, $this->bowlingGame->score());
	}

	function it_takes_exception_with_invalid_rolls()
	{
		$this->setExpectedException('InvalidArgumentException');

		$this->bowlingGame->roll(-10);
	}

	private function rollSpare()
	{
		$this->bowlingGame->roll(2);
		$this->bowlingGame->roll(8);
	}

	private function rollStrike()
	{
		$this->bowlingGame->roll(10);
	}

	private function rollTimes($count, $pins)
	{
		for ($i = 0; $i < $count; $i++)
		{
			$this->bowlingGame->roll($pins);
		}
	}
}
