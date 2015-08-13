<?php

    class Scrabble
    {

        function mainMethod($word)
        {
            $new_word = new Scrabble;
            $lower_word = $new_word->toLowerCase($word);
            if ($new_word->verifyDictionary($word)) {
                $array_word = $new_word->wordToArray($word);
                $score_word = $new_word->wordScore($word);
                return $score_word;
            } else return false;

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

        function wordToArray($word)
        {
            $word_array = str_split($word);
            return $word_array;
        }

        function wordScore($word)
        {
            $score = 0;
            foreach ($word as $letter) {
                $new_object = new Scrabble;
                $score += $new_object->letterScore($letter);
            }
            return $score;
        }

        function toLowerCase($word)
        {
            $lower_case = strtolower($word);
            return $lower_case;
        }

        function verifyDictionary($word)
        {
            $string_Dictionary = file_get_contents('https://raw.githubusercontent.com/jonbcard/scrabble-bot/master/src/dictionary.txt');
            $lower_Dictionary = strtolower($string_Dictionary);
            $array_Dictionary = explode("\n", $lower_Dictionary);
            // var_dump($array_Dictionary);

            return in_array($word, $array_Dictionary);
        }
    }


 ?>
