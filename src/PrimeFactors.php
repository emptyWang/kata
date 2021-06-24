<?php

namespace App;

class PrimeFactors
{
    public function generateOld($number)
    {
        $factors = [];
        $divisor = 2;

        while ($number > 1) {
            while ($number % $divisor === 0) {
                $factors[] = $divisor;
                $number = $number / $divisor;
            }

            $divisor++;
        }

        return $factors;
    }

    public function generate($number)
    {
        $factors = [];

        for($divisor = 2; $number > 1; $divisor++) {
            for(; $number % $divisor === 0; $number /= $divisor) {
                $factors[] = $divisor;
            }
        }

        return $factors;
    }
}