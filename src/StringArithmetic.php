<?php

namespace App;

class StringArithmetic
{
    public function sum($strList)
    {
        //反转字符串
        $maxLen = 0;
        foreach ($strList as $k=>$v) {
            $strList[$k] = strrev($v);
            $strLen = strlen($v);
            if ($strLen > $maxLen) {
                $maxLen = $strLen;
            }
        }
        print_r($strList);

        $res = [];
        $plus = 0;
        for ($i = 0; $i < $maxLen; $i++) {
            $tmpSum = 0;
            foreach ($strList as $v){
                $tmpSum += isset($v[$i]) ? intval($v[$i]) : 0;
            }
            $tmpSum += $plus;
            $res[] = $tmpSum % 10;
            $plus = $tmpSum - 10 >= 0 ? 1 : 0;
        }
        if($plus) {
            $res[] = $plus;
        }
        print_r($res);

        $res = array_reverse($res);
        return implode("", $res);
    }
}