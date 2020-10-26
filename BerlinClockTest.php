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
        $actual = $this->berlinClock->count(1);

        $this->assertEquals("1", $actual);
    }

    public function test_count_given2_shouldReturn2(){
        $actual = $this->berlinClock->count(2);

        $this->assertEquals("2", $actual);
    }
}
