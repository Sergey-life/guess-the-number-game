<?php

echo 'Введите слово c буквой - "o" ';
$line = readline( "\n");

if (!empty($line)) {
    echo str_replace('o', "0", $line . "\n");
} else {
    echo 'error!';
}

