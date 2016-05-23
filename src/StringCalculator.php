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
        if (!is_string($string)) {
            throw new \InvalidArgumentException("Invalid input [$string]");
        }

        if (empty($string)) {
            return 0;
        }

        $result = 0;
        foreach(explode(',', $string) as $number) {

            if (!is_numeric($number)) {
                throw new \InvalidArgumentException("Invalid number [$number] within input [$string].");
            }

            $result += (int) $number;
        }
        return $result;
    }
}