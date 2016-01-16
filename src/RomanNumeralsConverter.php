<?php

class RomanNumeralsConverter
{
    private $numberToNumeralMap = [
    	1000 => 'M',
    	900 => 'CM',
    	500 => 'D',
    	400 => 'CD',
    	100 => 'C',
    	90 => 'XC',
    	50 => 'L',
    	40 => 'XL',
    	10 => 'X',
    	9 => 'IX',
    	5 => 'V',
    	4 => 'IV',
    	1 => 'I'
    ];

    public function convertToNumeral($number)
    {
        if ($number <= 0)
        {
            return null;
        }

        $result = null;

        while ($number > 0)
        {
            foreach ($this->numberToNumeralMap as $decimalValue => $romanNumeral)
            {
                if ($number >= $decimalValue)
                {
                    $result .= $romanNumeral;
                    $number -= $decimalValue;
                    break;
                }
            }
        }

        return $result;
    }

    public function convertToNumber($numerals)
    {
        $result = 0;
        $map = array_flip($this->numberToNumeralMap);

        while (strlen($numerals))
        {
            $current = $numerals[0];
            $next = isset($numerals[1]) ? $numerals[1] : null;

            if (!is_null($next) && isset($map[$current . $next])) {
                $result += $map[$current . $next];
                $numerals = substr($numerals, 2);
            } else {
                $result += $map[$current];
                $numerals = substr($numerals, 1);
            }
        }

        return $result;
    }
}
