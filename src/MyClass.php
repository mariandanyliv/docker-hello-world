<?php

    class MyClass {

        public function getMinuteQuarter(int $minute)
        {
            if (!is_int($minute) || $minute < 0 || $minute >= 60) {
                throw new InvalidArgumentException(
                    "getMinuteQuarter function only accepts not negative integers and less than sixty.
                     Input was: " . $minute);
            } elseif ($minute > 0 && $minute <= 15) {
                return "first";
            } elseif ($minute > 15 && $minute <= 30) {
                return "second";
            } elseif ($minute > 30 && $minute <= 45) {
                return "third";
            } else {
                return "fourth";
            }
        }

        public function isLeapYear(int $year)
        {
            if ($year < 1900) {
                throw new InvalidArgumentException(
                    "isLeapYear function only accepts integers and less than 1900.
                     Input was: " . $year);
            } else {
                return (!($year % 4) && ($year % 100 || !($year % 400)));
            }
            
        }

        public function isSumEqual(string $input)
        {

            if (strlen($input)==6){
                $sum1=$input[0]+$input[1]
                +$input[2];
                $sum2=$input[3]+$input[4]
                +$input[5];
                if ( $sum1 == $sum2){
                    return true;
                }else {
                    return false;
                }
            }else{
                throw new InvalidArgumentException("input must be string of six digits");	
            }
            
        }
    }