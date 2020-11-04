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

    public function countBlockOfFiveMinutes(int $int): string{
        if($int >= 40) return "6Y2R";
        if($int >= 35) return "5Y2R";
        if($int >= 30) return "4Y2R";
        if($int >= 25) return "4Y1R";
        if($int >= 20) return "3Y1R";
        if($int >= 15) return "2Y1R";
        if($int >= 10) return "2Y0R";
        if($int >= 5) return "1Y0R";

        return "0Y0R";
    }

}