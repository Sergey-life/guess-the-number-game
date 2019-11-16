<?php
$lineCount = readline('Введите количество людей: ');
for ($i = 1; $i <= $lineCount; $i++) {
    if (!empty($lineCount)) {
        $lineUsers = readline('Введите имя и фамилию пользователя: ');
    }
    $users[] = $lineUsers;
}
sort($users);
foreach ($users as $key => $user) {
    $key++;
    echo '> Пользователь ' . $key . ':' . $user . "\n";
}