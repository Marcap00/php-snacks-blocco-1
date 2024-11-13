<!-- Kata Moving Zeros To The End (Codewars)-->

<?php
function moveZeros(array $items): array
{
    $arr = [];
    $zerosCount = 0;
    foreach ($items as $item) {
        if (is_numeric($item) && floatval($item) == 0) {
            $zerosCount++;
        } else {
            $arr[] = $item;
        };
    };

    while ($zerosCount > 0) {
        $arr[] = 0;
        $zerosCount--;
    }
    return $arr;
}