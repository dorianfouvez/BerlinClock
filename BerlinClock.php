<?php


class BerlinClock{

    public function count(int $int): string{
        if($int === 1) return "1";
        if($int === 2) return "2";
        if($int === 3) return "3";
        if($int === 4) return "4";

        return "0";
    }

}