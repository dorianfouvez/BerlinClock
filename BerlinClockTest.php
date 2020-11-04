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

    public function test_countSimpleMinutes_given0_shouldReturnxxxx(){
        $actual = $this->actCountMinutes(0);

        $this->assertEquals("xxxx", $actual);
    }

    public function test_countSimpleMinutes_given1_shouldReturnYxxx(){
        $actual = $this->actCountMinutes(1);

        $this->assertEquals("Yxxx", $actual);
    }

    public function test_countSimpleMinutes_given2_shouldReturnYYxx(){
        $actual = $this->actCountMinutes(2);

        $this->assertEquals("YYxx", $actual);
    }

    public function test_countSimpleMinutes_given3_shouldReturnYYYx(){
        $actual = $this->actCountMinutes(3);

        $this->assertEquals("YYYx", $actual);
    }

    public function test_countSimpleMinutes_given4_shouldReturnYYYY(){
        $actual = $this->actCountMinutes(4);

        $this->assertEquals("YYYY", $actual);
    }

    public function test_countSimpleMinutes_given5_shouldReturnxxxx(){
        $actual = $this->actCountMinutes(5);

        $this->assertEquals("xxxx", $actual);
    }

    public function test_countSimpleMinutes_given6_shouldReturnYxxx(){
        $actual = $this->actCountMinutes(6);

        $this->assertEquals("Yxxx", $actual);
    }

    public function test_countSimpleMinutes_given7_shouldReturnYYxx(){
        $actual = $this->actCountMinutes(7);

        $this->assertEquals("YYxx", $actual);
    }

    public function test_countSimpleMinutes_given8_shouldReturnYYYx(){
        $actual = $this->actCountMinutes(8);

        $this->assertEquals("YYYx", $actual);
    }

    public function test_countSimpleMinutes_given9_shouldReturnYYYY(){
        $actual = $this->actCountMinutes(9);

        $this->assertEquals("YYYY", $actual);
    }

    public function test_countBlockOfFiveMinutes_given0_shouldReturn0Y0R(){
        $actual = $this->actCountBlockOfFiveMinutes(0);

        $this->assertEquals("0Y0R", $actual);
    }

    public function test_countBlockOfFiveMinutes_given5_shouldReturn1Y0R(){
        $actual = $this->actCountBlockOfFiveMinutes(5);

        $this->assertEquals("1Y0R", $actual);
    }

    public function test_countBlockOfFiveMinutes_given10_shouldReturn2Y0R(){
        $actual = $this->actCountBlockOfFiveMinutes(10);

        $this->assertEquals("2Y0R", $actual);
    }

    public function test_countBlockOfFiveMinutes_given15_shouldReturn2Y1R(){
        $actual = $this->actCountBlockOfFiveMinutes(15);

        $this->assertEquals("2Y1R", $actual);
    }

    private function actCountMinutes(int $int): string{
        return $this->berlinClock->countSimpleMinutes($int);
    }
    private function actCountBlockOfFiveMinutes(int $int): string{
        return $this->berlinClock->countBlockOfFiveMinutes($int);
    }
}
