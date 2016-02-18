<?php
    class NumberWord
    {
        function splitNumber($input)
        {
            return str_split($input);
        }

        function reverseArray($input)
        {
            return array_reverse($input);
        }

        function convertToWord($input)
        {
            $num_bank1 = array(
                0 => "zero",
                1 => "one",
                2 => "two",
                3 => "three",
                4 => "four",
                5 => "five",
                6 => "six",
                7 => "seven",
                8 => "eight",
                9 => "nine",
                10 => "ten",
                11 => "eleven",
                12 => "twelve",
                13 => "thirteen",
                14 => "fourteen",
                15 => "fifteen",
                16 => "sixteen",
                17 => "seventeen",
                18 => "eighteen",
                19 => "nineteen"
            );
            $num_bank2 = array (
                2 => "twenty",
                3 => "thirty",
                4 => "forty",
                5 => "fifty",
                6 => "sixty",
                7 => "seventy",
                8 => "eighty",
                9 => "ninety"
            );
            //     100 => "hundred",
            //     1000 => "thousand",
            //     1000000 => "million",
            //     1000000000 => "billion",
            //     1000000000000 => "trillion"
            // );

            if ($input < 20) {
                $string = $num_bank1[$input];
            }
            elseif ($input >= 20 && $input < 100) {
                $string = $num_bank2[(int)$input/10];
            }
            return $string;

        }
    }
?>
