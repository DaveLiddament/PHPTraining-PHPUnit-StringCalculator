<?php

namespace Training\PHPUnit\StringCalculator;


class StringCalculator
{

    /**
     * Returns the sum of all the numbers in the string (where the numbers are delimited by a comma).
     *
     * @param $string
     * @return int
     * @throws \InvalidArgumentException if input is invalid (e.g. not a string)
     */
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