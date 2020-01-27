<?php

namespace Bottles;

class Bottles
{
    function verse($num)
    {
        switch ($num) {
            default:
                return "$num bottles of beer on the wall, " .
                    "$num bottles of beer.\n" .
                    "Take one down and pass it around, " .
                    ($num - 1) . " bottles of beer on the wall.\n";
                break;
            case 2:
                return "2 bottles of beer on the wall, " .
                    "2 bottles of beer.\n" .
                    "Take one down and pass it around, " .
                    "1 bottle of beer on the wall.\n";
                break;
            case 1:
                return "1 bottle of beer on the wall, " .
                    "1 bottle of beer.\n" .
                    "Take it down and pass it around, " .
                    "No more bottles of beer on the wall.\n";
                break;
            case 0:
                return "No more bottles of beer on the wall, " .
                    "No more bottles of beer.\n" .
                    "Go to the store and buy some more, " .
                    "99 bottles of beer on the wall.\n";
                break;
        }
    }

    function verses($start, $end)
    {
        $verses = [];
        for ($x = $start; $x >= $end; $x--) {
            $verses[] = $this->verse($x);
        }
        return implode("\n", $verses);
    }

    function song()
    {
        return $this->verses(99, 0);
    }
}
