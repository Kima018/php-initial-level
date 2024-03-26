<?php
if ($_GET['operation'] === "addition") {
    $result = intval($_GET['num_1']) + intval($_GET['num_2']);
}elseif ($_GET['operation'] === "subtraction"){
    $result = intval($_GET['num_1']) - intval($_GET['num_2']);
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
<h2> Rezultat je <?=$result?></h2>
</body>
</html>
