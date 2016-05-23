<?php

namespace Training\PHPUnit\StringCalculator;


class StringCalculator
{


    public function add($string)
    {
        if (empty($string)) {
            return 0;
        }

        $result = 0;
        foreach(explode(',', $string) as $number) {
            $result += (int) $number;
        }
        return $result;
    }
}