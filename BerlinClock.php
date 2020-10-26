<?php


class BerlinClock{

    public function countSimpleMinutes(int $int): string{
        $int = $int%5;

        if($int === 1) return "1";
        if($int === 2) return "2";
        if($int === 3) return "3";
        if($int === 4) return "4";

        return "0";
    }

}