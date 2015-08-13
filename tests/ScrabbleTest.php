<?php

    require_once "src/Scrabble.php";

    class ScrabbleTest extends PHPUnit_Framework_TestCase
    {
        function test_letterScore()
        {
            $test_Scrabble = new Scrabble;
            $input = "j";

            $result = $test_Scrabble->letterScore($input);

            $this->AssertEquals(8, $result);
        }
    }




 ?>
