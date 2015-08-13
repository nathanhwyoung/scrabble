<?php

    require_once "src/Scrabble.php";

    class ScrabbleTest extends PHPUnit_Framework_TestCase
    {
        function test_letterScore()
        {
            $test_Scrabble = new Scrabble;
            $input = "a";

            $result = $test_Scrabble->letterScore($input);

            $this->AssertEquals(1, $result);
        }
    }




 ?>
