<?php

$line = readline('Введите число: ');
$a = 0;
$b = 1;
echo $a . ", " . $b . ", ";
while (true) {
    $v = $a + $b;
    if ($v >= $line) {
        break;
    }
    echo $v . ", ";

    $a = $b;
    $b = $v;
}
