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

        function test_wordToArray()
        {
            $test_Scrabble = new Scrabble;
            $input = "hello";

            $result = $test_Scrabble->wordToArray($input);

            $this->AssertEquals(['h', 'e', 'l', 'l', 'o'], $result);
        }
    }




 ?>
