<?php

/*
- 10 frames
- 1 or 2 shots
- Spares
    - 5
    - 5 // spare
    - 7 // 24
 - Strike
    - 10
    - 2
    - 4 // 22
*/

class BowlingGame
{
    protected $rolls = [];

    public function roll($pins)
    {
        if ($pins < 0)
		{
			throw new InvalidArgumentException;
		}

        $this->rolls[] = $pins;
    }

    public function score()
    {
        $score = 0;
        $roll = 0;

        for ($frame = 1; $frame <= 10; $frame++)
        {
            if ($this->isStrike($roll))
            {
                $score += 10 + $this->strikeBonus($roll);
                $roll += 1;
            }
            else if ($this->isSpare($roll))
            {
                $score += 10 + $this->spareBonus($roll);
                $roll += 2;
            }
            else
            {
                $score += $this->rolls[$roll] + $this->rolls[$roll + 1];
                $roll += 2;
            }
        }

        return $score;
    }

    protected function isSpare($roll)
    {
        return $this->rolls[$roll] + $this->rolls[$roll + 1] == 10;
    }

    protected function isStrike($roll)
	{
		return $this->rolls[$roll] == 10;
	}

    private function strikeBonus($roll)
    {
        return $this->rolls[$roll + 1] + $this->rolls[$roll + 2];
    }

    private function spareBonus($roll)
    {
        return $this->rolls[$roll + 2];
    }
}
