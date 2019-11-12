<?php

$line = readline( 'Введите слово c буквой - "o" ' . "\n");

if (!empty($line)) {
    echo str_replace('o', "0", $line . "\n");
} else {
    echo 'error!';
}

