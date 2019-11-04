
<?php

echo 'Угадай число от 1 до 100';
echo '<br>';

$secret_number = 10;

if (!empty($_POST['secret_number']) && $_POST['secret_number'] == $secret_number) {
    echo 'Вы угадали!!!';
} elseif ($_POST['secret_number'] < 10 ) {
    echo 'Введите большее число!';
} elseif ($_POST['secret_number'] > 10) {
    echo 'Ведите меньшее число!';
}
var_dump($_POST);


//    if ($_POST['secret_number'] < 10 ) {
//        echo 'Введите большее число!';
//    } elseif ($_POST['secret_number'] > 10) {
//        echo 'Ведите меньшее число!';
//    } elseif (!empty($_POST['secret_number']) && $_POST['secret_number'] == $secret_number) {
//        echo 'Вы угадали!!!';
//    }

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="" method="post">
<input type="text" name="secret_number">
<input type="submit" value="Угадай">
</form>
</body>
</html>


