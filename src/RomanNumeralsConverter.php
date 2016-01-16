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
        $result = null;

        if ($number < 1)
        {
            return null;
        }

        // Find the highest decimal value v
        // that is less than or equal to the decimal number x and
        // its corresponding roman numeral n:

        foreach ($this->lookupTable as $decimalValue => $romanNumeral)
        {
            if ($number <= 0)
            {
                break;
            }

            if ($number >= $decimalValue)
            {
                $result .= $romanNumeral;
                $number -= $decimalValue;

                echo $result . " " . $decimalValue . "\n";
            }
        }

        return $result;
    }
}
