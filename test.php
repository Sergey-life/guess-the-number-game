<?php
$secret_number = 12;

if ($secret_number < 10) {
    echo 'Введите число больше!' . "\n";
} elseif ($secret_number > 10) {
    echo 'Введите число меньше!' . "\n";
}

elseif ( $secret_number == 10) {
    echo 'Вы выиграли!!!' . "\n";
}
