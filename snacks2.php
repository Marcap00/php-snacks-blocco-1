<!-- Kata Stop gninnipS My sdroW! (CodeWars)-->
<?php
function spinWords(string $str): string
{

    $arrOfWords = explode(" ", $str);
    $revArr = [];
    foreach ($arrOfWords as $word) {
        if (strlen($word) >= 5) {
            $revWord = strrev($word);
            array_push($revArr, $revWord);
        } else {
            array_push($revArr, $word);
        }
    }
    return $result = implode(" ", $revArr);
}