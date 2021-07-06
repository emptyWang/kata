<?php


use App\StringArithmetic;
use PHPUnit\Framework\TestCase;

class StringArithmeticTest extends TestCase
{
    /**
     * @test
     * @dataProvider stringsums
     */
    function it_generates_prime_factors_for_1($numberList, $expected)
    {
        $sumer = new StringArithmetic();

        $this->assertEquals($expected, $sumer->sum($numberList));
    }

    public function stringsums()
    {
        return [
            [["123", "999999"], "1000122"],
            [["123", "456"], "579"],
            [["123000000000000000000000000000000", "456000000000000000000000000000000"], "579000000000000000000000000000000"],
        ];
    }
}
