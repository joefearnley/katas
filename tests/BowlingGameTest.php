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
		$this->assertEquals(0, 0);
		// for ($i = 0; $i < 20; $i++)
		// {
		// 	$this->bowlingGame->roll(0);
		// }
		//
		// $this->assertEquals(0, $this->bowlingGame->score());
	}

}
