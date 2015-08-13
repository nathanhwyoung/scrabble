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

        function test_wordScore()
        {
            $test_Scrabble = new Scrabble;
            $input = ['h', 'e', 'l', 'l', 'o'];

            $result = $test_Scrabble->wordScore($input);

            $this->AssertEquals(8, $result);
        }

        function test_toLowerCase()
        {
            $test_Scrabble = new Scrabble;
            $input = "Hello";

            $result = $test_Scrabble->toLowerCase($input);

            $this->AssertEquals("hello", $result);
        }

        function failTest_verifyDictionary()
        {
            $test_Scrabble = new Scrabble;
            $input = "jjjfdssueyhdjkkaasodjhhf";

            $result = $test_Scrabble->verifyDictionary($input);

            $this->AssertEquals(false, $result);
        }

        function passTest_verifyDictionary()
        {

        }
    }




 ?>
