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
    protected $score;
    protected $rolls = [];

    public function roll($pins)
    {
        $this->rolls[] = $pins;
    }

    public function score()
    {
        for ($frames = 1; $frames <= 10 ; $frames++) {
            if ($this->isSpare())
            {
                $score += 10 + $this->rolls[$roll + 2];
            }
            else if ($this->isStrike())
            {
                // do another thing
            }
            else
            {
                // do this by defualt
            }
        }

        return $this->score;
    }

    protected function isSpare()
    {
        return $this->rolls[$roll] + $this->rolls[$roll + 1] == 10;
    }
}
