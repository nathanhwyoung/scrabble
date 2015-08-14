<?php

    class Scrabble
    {

        function mainMethod($word)
        {
            $lower_word = $this->toLowerCase($word);

            if ($this->verifyDictionary($lower_word)) {
                $array_word = $this->wordToArray($lower_word);
                $score_word = $this->wordScore($array_word);
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
                $score += $this->letterScore($letter);
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
            var_dump($string_Dictionary);
            $lower_Dictionary = strtolower($string_Dictionary);
            $array_Dictionary = explode("\n", $lower_Dictionary);
            return in_array($word, $array_Dictionary);
        }
    }


 ?>
