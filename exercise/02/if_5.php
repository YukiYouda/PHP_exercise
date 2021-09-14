<?php

$num = 10000;
$count = 0;

for ($i = 2; $i <= $num; $i++) {
    if ($num % $i === 0) {
        $count += 1;
        if ($count === 2) {
            break;
        }
    }
}

if ($count === 1) {
    echo "{$num}は素数です。";
} else {
    echo "{$num}は素数ではありません。";
}
