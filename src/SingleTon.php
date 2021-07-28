<?php

namespace App;

class SingleTon
{
    static private $instance;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (!self::$instance instanceof self) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function test()
    {
        var_dump(self::$instance);
    }

    private function __clone()
    {
    }
}

$single = SingleTon::getInstance();
$single->test();
$single2 = SingleTon::getInstance();
$single2->test();
$str = serialize($single);
unset($single);
$single3 = unserialize($str);
$single3->test();
