<?php

    class Scrabble
    {
        function score($word)
        {
            // convert string to lower case
            $lower_case_word = strtolower($word);


            //verify word in dictionary
            $string_Dictionary = file_get_contents('https://raw.githubusercontent.com/jonbcard/scrabble-bot/master/src/dictionary.txt');
            $lower_Dictionary = strtolower($string_Dictionary);
            $array_Dictionary = explode("\n", $lower_Dictionary);

            // if word is in dictionary...
            if(in_array($lower_case_word, $array_Dictionary)) {

                //split it into an array
                $word_array = str_split($lower_case_word);


                //iterate through word array and accumulate word value
                $score = 0;
                foreach ($word_array as $letter) {
                    $new_object = new Scrabble;
                    $score += $new_object->letterScore($letter);
                } return $score;

            } else return "error";
        }

        function letterScore($letter)
        {
            $letter_value = 0;
            if (($letter == "a") || ($letter == "e") || ($letter == "i") || ($letter == "o") || ($letter == "u") || ($letter =="l") || ($letter == "n") || ($letter == "r") || ($letter == "s") || ($letter == "t")) {
                $letter_value = 1;
            } elseif (($letter == "d") || ($letter == "g")) {
                $letter_value = 2;
            } elseif (($letter == "b") || ($letter == "c") || ($letter == "m") || ($letter == "p")) {
                $letter_value = 3;
            } elseif (($letter == "f") || ($letter == "h") || ($letter == "v") || ($letter == "w") || ($letter == "y")) {
                $letter_value = 4;
            } elseif ($letter == "k") {
                $letter_value = 5;
            } elseif (($letter == "j") || ($letter == "x")) {
                $letter_value = 8;
            } elseif (($letter == "q") || ($letter == "z")) {
                $letter_value = 10;
            }
            return $letter_value;
        }
    }
