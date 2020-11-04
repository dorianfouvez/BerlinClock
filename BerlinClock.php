<?php


class BerlinClock{

    public function countSimpleMinutes(int $int): string{
        $int = $int%5;

        if($int === 1) return "Yxxx";
        if($int === 2) return "YYxx";
        if($int === 3) return "YYYx";
        if($int === 4) return "YYYY";

        return "xxxx";
    }



}