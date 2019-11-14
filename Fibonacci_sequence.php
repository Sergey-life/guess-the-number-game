<?php

$line = readline('Введите число: ');
$a = 1;
$b = 0;
echo $b . ", " . $a . ", ";
while (true) {
    $v = $a + $b;
    if ($v >= $line) {
        break;
    }
    echo $v . ", ";

    $b = $a;
    $a = $v;
}
