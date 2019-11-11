<?php

echo 'Угадай число от 1 до 100';

for ($i = 0; $i < 1000; $i++) {
    $line = readline( "\n");
    readline_add_history($line);

    $secret_number = rand(1, 100);

    if ($line < $secret_number) {
        echo 'Введите большее число!';
    } elseif ($line > $secret_number) {
        echo 'Введите меньшее число!';
    } elseif ($line == $secret_number) {
        echo 'Вы угадали!!! ' . "\n";
        echo 'Количество сделаных попыток: ' . ++$i . "\n";
        exit();
    }

}



