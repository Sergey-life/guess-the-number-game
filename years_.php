<?php
//Список високосных годов v3

function is_leap_year($year) {
   return ((($year % 4) == 0) && ((($year % 100) != 0) || (($year % 400) == 0)));
}

if (!empty($_POST['startingYear'])) {
    $startingYear = $_POST['startingYear'];
    var_dump(is_leap_year($startingYear));
}

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
    <h3>Введите начальный год</h3>
    <input type="text" name="startingYear">
    <input type="submit" value="Вперед">
</form>

</body>
</html>
