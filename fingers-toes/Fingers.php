<?php

class Fingers
{
    public function count($number)
    {
        if ($number == 15) {
            return 'fizzbuzz';
        }
        if ($number % 3 == 0) {
            return 'fizz';
        }
        if ($number % 5 == 0) {
            return 'buzz';
        }
        return $number;
    }

    public function makelist($number)
    {
        $out = array();
        for ($i = 1; $i <= $number; $i++) {
            $out[] = $this->count($i);
        }
        return $out;
    }
}
