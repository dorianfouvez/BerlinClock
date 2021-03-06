<?php


class BerlinClock{

    public function countSimpleMinutes(int $int): string{
        $int = $int%5;

        if($int === 1) return "1Y";
        if($int === 2) return "2Y";
        if($int === 3) return "3Y";
        if($int === 4) return "4Y";

        return "0Y";
    }

    public function countBlockOfFiveMinutes(int $int): string{
        if($int >= 55) return "8Y3R";
        if($int >= 50) return "7Y3R";
        if($int >= 45) return "6Y3R";
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

    public function countSimpleHours(int $int): string{
        $int = $int%5;

        if($int === 1) return "1R";
        if($int === 2) return "2R";
        if($int === 3) return "3R";
        if($int === 4) return "4R";

        return "0R";
    }

    public function countBlockOfFiveHours(int $int): string{
        if($int >= 20) return "4R";
        if($int >= 15) return "3R";
        if($int >= 10) return "2R";
        if($int >= 5) return "1R";

        return "0R";
    }

    public function countSeconds(int $int): string{
        $int = $int%2;

        if($int === 1) return "0R";

        return "1R";
    }

    public function countEntireClock(string $heure): string{
        $hours = intval(substr($heure, 0, 2));
        $minutes = intval(substr($heure, 3, 2));
        $seconds = intval(substr($heure, 6,2));

        $stringMinutes = $this->countSimpleMinutes($minutes) . $this->countBlockOfFiveMinutes($minutes);
        $stringHours = $this->countSimpleHours($hours) . $this->countBlockOfFiveHours($hours);
        $stringSeconds = $this->countSeconds($seconds);

        return $stringMinutes . $stringHours . $stringSeconds;
    }

}