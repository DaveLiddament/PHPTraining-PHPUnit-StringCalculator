<?php

namespace Training\PHPUnit\StringCalculator;


class StringCalculator
{


    public function add($string)
    {
        if (empty($string)) {
            return 0;
        }
        
        return (int) $string;
    }
}