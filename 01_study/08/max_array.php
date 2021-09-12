<?php

$nums =range(1, 100);

function maxArray($array) {
    $maxValue = $array[0];

    foreach ($array as $value) {
        if ($maxValue < $value) {
            $maxValue = $value;
        }
    }
    return $maxValue;
}

echo maxArray($nums);