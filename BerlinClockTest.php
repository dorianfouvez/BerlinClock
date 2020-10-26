<?php

namespace BerlinClock;
require "BerlinClock.php";

use PHPUnit\Framework\TestCase;

class BerlinClockTest extends TestCase{

    public function test_count_given1_shouldReturn1(){
        $berlin = new \BerlinClock();

        $actual = $berlin->count(1);

        $this->assertEquals("1", $actual);
    }

    public function test_count_given2_shouldReturn2(){
        $berlin = new \BerlinClock();

        $actual = $berlin->count(2);

        $this->assertEquals("2", $actual);
    }
}
