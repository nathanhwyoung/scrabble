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

            $result = $test_Scrabble->score($input);

            $this->AssertEquals(['h', 'e', 'l', 'l', 'o'], $result);
        }

        function test_wordScore()
        {
            $test_Scrabble = new Scrabble;
            $input = ['g', 'o', 'v', 'e', 'r', 'n', 'm', 'e', 'n', 't'];

            $result = $test_Scrabble->score($input);

            $this->AssertEquals(16, $result);
        }

        function test_toLowerCase()
        {
            $test_Scrabble = new Scrabble;
            $input = "Hello";

            $result = $test_Scrabble->score($input);

            $this->AssertEquals("hello", $result);
        }

        function testPass_verifyDictionary()
        {
            $test_Scrabble = new Scrabble;
            $input = "dictionary";

            $result = $test_Scrabble->score($input);

            $this->AssertEquals(true, $result);
        }
    }




 ?>
