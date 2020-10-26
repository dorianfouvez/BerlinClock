<?php

namespace BerlinClock;
require "BerlinClock.php";

use PHPUnit\Framework\TestCase;

class BerlinClockTest extends TestCase{

    private $berlinClock;

    protected function setUp(): void{
        parent::setUp();
        $this->berlinClock = new \BerlinClock();
    }

    public function test_count_given1_shouldReturn1(){
        $actual = $this->actCount(1);

        $this->assertEquals("1", $actual);
    }

    public function test_count_given2_shouldReturn2(){
        $actual = $this->actCount(2);

        $this->assertEquals("2", $actual);
    }

    public function test_count_given3_shouldReturn3(){
        $actual = $this->actCount(3);

        $this->assertEquals("3", $actual);
    }

    public function test_count_given4_shouldReturn4(){
        $actual = $this->actCount(4);

        $this->assertEquals("4", $actual);
    }

    private function actCount(int $int): string{
        return $this->berlinClock->count($int);
    }
}
