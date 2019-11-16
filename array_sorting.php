<?php
error_reporting(E_ALL);
$lineCount = readline('Введите количество людей: ');
for ($i = 1; $i <= $lineCount; $i++) {
    if (!empty($lineCount)) {
        $lineUsers = readline('Введите имя и фамилию пользователя: ');
    }
    $users[] = $lineUsers;
}
sort($users);
$a = 0;
foreach ($users as $user) {
    $a++;
    echo '> Пользователь ' . $a . ':' . $user . "\n";
}