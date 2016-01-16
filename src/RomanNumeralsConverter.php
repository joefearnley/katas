<?php

class RomanNumeralsConverter
{
    private $lookupTable = [
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

    public function convert($number)
    {
        if ($number <= 0)
        {
            return null;
        }

        $result = null;

        while ($number > 0)
        {
            foreach ($this->lookupTable as $decimalValue => $romanNumeral)
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
}
