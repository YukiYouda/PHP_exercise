<?php

$num = 2;
$count = 0;

for ($i = 1; $i <= $num; $i++) {
    if ($num % $i === 0) {
        $count += 1;
    }
}

if ($count === 2) {
    echo "{$num}は素数です。";
} else {
    echo "{$num}は素数ではありません。";
}
