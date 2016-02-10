<?php

class Fibonacci
{
    public function calculate($n)
    {
        if ($n == 0 || $n == 1) {
            return $n;
        }

        $numbers = [0, 1];
        for ($i = 2; $i < $n; $i++) {
            array_push($numbers, ($numbers[$i - 1] + $numbers[$i - 2]));
        }

        return $numbers[$n - 1] + $numbers[$n - 2];
    }

    public function calculateUsingRecursion($n)
    {
        if ($n == 0 || $n == 1) {
            return $n;
        }

        return $this->calculateUsingRecursion($n - 1) + $this->calculateUsingRecursion($n - 2);
    }
}
