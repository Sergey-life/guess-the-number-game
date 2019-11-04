<?php

function listYears($startingYear, $endYear, $step = 4) {
echo implode(', ', range($startingYear, $endYear, $step));
}

if (!empty($_POST['startingYear']) && !empty($_POST['endYear'])) {
    $startingYear = $_POST['startingYear'];
    $endYear = $_POST['endYear'];
    listYears($startingYear, $endYear);
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
    <h3>Введите конечный год</h3>
    <input type="text" name="endYear"
    <input type="submit" value="Вперед">
</form>

</body>
</html>
