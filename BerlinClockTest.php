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

    public function test_countSimpleMinutes_given0_shouldReturn0Y(){
        $actual = $this->actCountMinutes(0);

        $this->assertEquals("0Y", $actual);
    }

    public function test_countSimpleMinutes_given1_shouldReturn1Y(){
        $actual = $this->actCountMinutes(1);

        $this->assertEquals("1Y", $actual);
    }

    public function test_countSimpleMinutes_given2_shouldReturn2Y(){
        $actual = $this->actCountMinutes(2);

        $this->assertEquals("2Y", $actual);
    }

    public function test_countSimpleMinutes_given3_shouldReturn3Y(){
        $actual = $this->actCountMinutes(3);

        $this->assertEquals("3Y", $actual);
    }

    public function test_countSimpleMinutes_given4_shouldReturn4Y(){
        $actual = $this->actCountMinutes(4);

        $this->assertEquals("4Y", $actual);
    }

    public function test_countSimpleMinutes_given5_shouldReturn0Y(){
        $actual = $this->actCountMinutes(5);

        $this->assertEquals("0Y", $actual);
    }

    public function test_countSimpleMinutes_given6_shouldReturn1Y(){
        $actual = $this->actCountMinutes(6);

        $this->assertEquals("1Y", $actual);
    }

    public function test_countSimpleMinutes_given7_shouldReturn2Y(){
        $actual = $this->actCountMinutes(7);

        $this->assertEquals("2Y", $actual);
    }

    public function test_countSimpleMinutes_given8_shouldReturn3Y(){
        $actual = $this->actCountMinutes(8);

        $this->assertEquals("3Y", $actual);
    }

    public function test_countSimpleMinutes_given9_shouldReturn4Y(){
        $actual = $this->actCountMinutes(9);

        $this->assertEquals("4Y", $actual);
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

    public function test_countBlockOfFiveMinutes_given20_shouldReturn3Y1R(){
        $actual = $this->actCountBlockOfFiveMinutes(20);

        $this->assertEquals("3Y1R", $actual);
    }

    public function test_countBlockOfFiveMinutes_given21_shouldReturn3Y1R(){
        $actual = $this->actCountBlockOfFiveMinutes(21);

        $this->assertEquals("3Y1R", $actual);
    }

    public function test_countBlockOfFiveMinutes_given25_shouldReturn4Y1R(){
        $actual = $this->actCountBlockOfFiveMinutes(25);

        $this->assertEquals("4Y1R", $actual);
    }

    public function test_countBlockOfFiveMinutes_given30_shouldReturn4Y2R(){
        $actual = $this->actCountBlockOfFiveMinutes(30);

        $this->assertEquals("4Y2R", $actual);
    }

    public function test_countBlockOfFiveMinutes_given35_shouldReturn5Y2R(){
        $actual = $this->actCountBlockOfFiveMinutes(35);

        $this->assertEquals("5Y2R", $actual);
    }

    public function test_countBlockOfFiveMinutes_given40_shouldReturn6Y2R(){
        $actual = $this->actCountBlockOfFiveMinutes(40);

        $this->assertEquals("6Y2R", $actual);
    }

    public function test_countBlockOfFiveMinutes_given45_shouldReturn6Y3R(){
        $actual = $this->actCountBlockOfFiveMinutes(45);

        $this->assertEquals("6Y3R", $actual);
    }

    public function test_countBlockOfFiveMinutes_given50_shouldReturn7Y3R(){
        $actual = $this->actCountBlockOfFiveMinutes(50);

        $this->assertEquals("7Y3R", $actual);
    }

    public function test_countBlockOfFiveMinutes_given55_shouldReturn8Y3R(){
        $actual = $this->actCountBlockOfFiveMinutes(55);

        $this->assertEquals("8Y3R", $actual);
    }

    public function test_countSimpleHours_given0_shouldReturn0R(){
        $actual = $this->actCountSimpleHours(0);

        $this->assertEquals("0R", $actual);
    }

    public function test_countSimpleHours_given1_shouldReturn1R(){
        $actual = $this->actCountSimpleHours(1);

        $this->assertEquals("1R", $actual);
    }

    public function test_countSimpleHours_given2_shouldReturn2R(){
        $actual = $this->actCountSimpleHours(2);

        $this->assertEquals("2R", $actual);
    }

    public function test_countSimpleHours_given3_shouldReturn3R(){
        $actual = $this->actCountSimpleHours(3);

        $this->assertEquals("3R", $actual);
    }

    public function test_countSimpleHours_given4_shouldReturn4R(){
        $actual = $this->actCountSimpleHours(4);

        $this->assertEquals("4R", $actual);
    }

    public function test_countSimpleHours_given5_shouldReturn0R(){
        $actual = $this->actCountSimpleHours(5);

        $this->assertEquals("0R", $actual);
    }

    public function test_countSimpleHours_given6_shouldReturn1R(){
        $actual = $this->actCountSimpleHours(6);

        $this->assertEquals("1R", $actual);
    }

    public function test_countSimpleHours_given7_shouldReturn2R(){
        $actual = $this->actCountSimpleHours(7);

        $this->assertEquals("2R", $actual);
    }

    public function test_countBlockOfFiveHours_given0_shouldReturn0R(){
        $actual = $this->actCountBlockOfFiveHours(0);

        $this->assertEquals("0R", $actual);
    }

    public function test_countBlockOfFiveHours_given1_shouldReturn0R(){
        $actual = $this->actCountBlockOfFiveHours(1);

        $this->assertEquals("0R", $actual);
    }

    public function test_countBlockOfFiveHours_given5_shouldReturn1R(){
        $actual = $this->actCountBlockOfFiveHours(5);

        $this->assertEquals("1R", $actual);
    }

    public function test_countBlockOfFiveHours_given6_shouldReturn1R(){
        $actual = $this->actCountBlockOfFiveHours(6);

        $this->assertEquals("1R", $actual);
    }



    private function actCountMinutes(int $int): string{
        return $this->berlinClock->countSimpleMinutes($int);
    }
    private function actCountBlockOfFiveMinutes(int $int): string{
        return $this->berlinClock->countBlockOfFiveMinutes($int);
    }
    private function actCountSimpleHours(int $int): string{
        return $this->berlinClock->countSimplesHours($int);
    }
    private function actCountBlockOfFiveHours(int $int): string{
        return $this->berlinClock->countBlockOfFiveHours($int);
    }
}
