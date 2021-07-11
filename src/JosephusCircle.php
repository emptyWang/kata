<?php

namespace App;

class JosephusCircle
{
    //模拟仿真法
    public function lastRemain($all, $m, $current = 0)
    {
        $totalNumber = count($all);
        if ($totalNumber === 1) {
            echo $all[0]." to be the last one\n\n";
            return $all[0];
        } else {
            $num = 1;
            while ($num++ < $m) {
                $current++;
                $current = $current % $totalNumber;
            }
            echo $all[$current]." get out this round\n";
            array_splice($all, $current, 1);
            return self::lastRemain($all, $m, $current);
        }
    }

    //数学归纳法
    public function gotIt($totalNumber, $ordinal)
    {
        $r = 0;
        for ($i = 2; $i <= $totalNumber; $i++) {
            $r = ($r + $ordinal) % $i;
        }
        return $r + 1;
    }
}