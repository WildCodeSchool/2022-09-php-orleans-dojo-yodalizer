<?php

namespace App;

class Yoda
{
    public function translate(string $sentence)
    {
        if ($sentence === "") {
            return "";
        }

        $sentence = rtrim($sentence, ".");
        $sentence = strtolower($sentence);
        $words = explode(' ', $sentence);
        $words = array_reverse($words);
        $newSentence = implode(' ', $words);
        $newSentence = ucfirst($newSentence);
        $newSentence = $newSentence . '.';

        return $newSentence;
    }
}
