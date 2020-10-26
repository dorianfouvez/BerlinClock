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

    public function test_count_given0_shouldReturn0(){
        $actual = $this->actCount(0);

        $this->assertEquals("0", $actual);
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

    public function test_count_given5_shouldReturn0(){
        $actual = $this->actCount(5);

        $this->assertEquals("0", $actual);
    }

    public function test_count_given6_shouldReturn1(){
        $actual = $this->actCount(6);

        $this->assertEquals("1", $actual);
    }

    public function test_count_given7_shouldReturn2(){
        $actual = $this->actCount(7);

        $this->assertEquals("2", $actual);
    }

    public function test_count_given8_shouldReturn3(){
        $actual = $this->actCount(8);

        $this->assertEquals("3", $actual);
    }

    public function test_count_given9_shouldReturn4(){
        $actual = $this->actCount(9);

        $this->assertEquals("4", $actual);
    }

    private function actCount(int $int): string{
        return $this->berlinClock->countSimpleMinutes($int);
    }
}
