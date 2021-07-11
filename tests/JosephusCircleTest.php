<?php


use App\JosephusCircle;
use PHPUnit\Framework\TestCase;

class JosephusCircleTest extends TestCase
{
    /**
     * @test
     * @dataProvider normalCases
     */
    function it_run_in_normal_way($expect, $all, $ordinal)
    {
        $josephus = new JosephusCircle();
        $this->assertEquals($expect, $josephus->lastRemain($all, $ordinal));
    }

    /**
     * @test
     * @dataProvider fastCases
     */
    function it_run_in_best_way($expect, $totalNumber, $ordinal)
    {
        $josephus = new JosephusCircle();
        $this->assertEquals($expect, $josephus->gotIt($totalNumber, $ordinal));
    }

    public function normalCases()
    {
        return [
            [4, range(1, 5), 3],
            [5, range(1, 10), 2],
        ];
    }

    public function fastCases()
    {
        return [
            [4, 5, 3],
            [5, 10, 2],
        ];
    }
}