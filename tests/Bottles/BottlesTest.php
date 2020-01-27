<?php

namespace Bottles;

use PHPUnit\Framework\TestCase;
use Bottles\Bottles;

class BottlesTest extends TestCase
{
    protected function setUp(): void
    {
        $this->bottles = new Bottles();
    }

    public function test_the_first_verse(): void
    {
        $expected = "99 bottles of beer on the wall, " .
            "99 bottles of beer.\n" .
            "Take one down and pass it around, " .
            "98 bottles of beer on the wall.\n";
        $this->assertEquals($expected, $this->bottles->verse(99));
    }

    public function test_another_verse(): void
    {
        $expected = "3 bottles of beer on the wall, " .
            "3 bottles of beer.\n" .
            "Take one down and pass it around, " .
            "2 bottles of beer on the wall.\n";
        $this->assertEquals($expected, $this->bottles->verse(3));
    }

    public function test_verse_2(): void
    {
        $expected = "2 bottles of beer on the wall, " .
            "2 bottles of beer.\n" .
            "Take one down and pass it around, " .
            "1 bottle of beer on the wall.\n";
        $this->assertEquals($expected, $this->bottles->verse(2));
    }

    public function test_verse_1(): void
    {
        $expected = "1 bottle of beer on the wall, " .
            "1 bottle of beer.\n" .
            "Take it down and pass it around, " .
            "No more bottles of beer on the wall.\n";
        $this->assertEquals($expected, $this->bottles->verse(1));
    }

    public function test_verse_0(): void
    {
        $expected = "No more bottles of beer on the wall, " .
            "No more bottles of beer.\n" .
            "Go to the store and buy some more, " .
            "99 bottles of beer on the wall.\n";
        $this->assertEquals($expected, $this->bottles->verse(0));
    }

    public function test_couple_verses(): void
    {
        $expected = "99 bottles of beer on the wall, " .
            "99 bottles of beer.\n" .
            "Take one down and pass it around, " .
            "98 bottles of beer on the wall.\n" .
            "\n" .
            "98 bottles of beer on the wall, " .
            "98 bottles of beer.\n" .
            "Take one down and pass it around, " .
            "97 bottles of beer on the wall.\n";
        $this->assertEquals($expected, $this->bottles->verses(99, 98));
    }

    public function test_a_few_verses(): void
    {
        $expected = "2 bottles of beer on the wall, " .
            "2 bottles of beer.\n" .
            "Take one down and pass it around, " .
            "1 bottle of beer on the wall.\n" .
            "\n" .
            "1 bottle of beer on the wall, " .
            "1 bottle of beer.\n" .
            "Take it down and pass it around, " .
            "No more bottles of beer on the wall.\n" .
            "\n" .
            "No more bottles of beer on the wall, " .
            "No more bottles of beer.\n" .
            "Go to the store and buy some more, " .
            "99 bottles of beer on the wall.\n";
        $this->assertEquals($expected, $this->bottles->verses(2, 0));
    }
}
