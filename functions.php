<?php
//1.

function getDigits($number) {
    $numberString = (string) $number;
    $digits = [];

    for ($i = 0; $i < strlen($numberString); $i++) {
        $digits[] = (int) $numberString[$i];
    }

    return $digits;
}

//2.

function toPigLatin($text) {
    $words = explode(' ', $text);
    $pigLatinWords = [];

    foreach ($words as $word) {
        if (strlen($word) > 1) {
            $pigWord = substr($word, 1) . $word[0] . 'ay';
        } else {
            $pigWord = $word . 'ay';
        }
        $pigLatinWords[] = $pigWord;
    }

    return implode(' ', $pigLatinWords);
}

function fromPigLatin($text) {
    $words = explode(' ', $text);
    $englishWords = [];

    foreach ($words as $word) {
        if (strlen($word) > 2 && substr($word, -2) === 'ay') {
            $englishWord = substr($word, -3, 1) . substr($word, 0, -3);
        } else {
            $englishWord = $word;
        }
        $englishWords[] = $englishWord;
    }

    return implode(' ', $englishWords);
}

//3.

function rotateArray(&$arr, $k) {
    $k = $k % count($arr);
    if ($k == 0) return;
    $arr = array_merge(array_splice($arr, $k), $arr);
}



?>