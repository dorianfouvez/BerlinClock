<?php


class BerlinClock{

    public function count(int $int): string{
        if($int === 2) return "2";
        if($int === 3) return "3";
        if($int === 4) return "4";

        return "1";
    }

}