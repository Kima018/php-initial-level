<?php

$name = "Marijan";
$name = str_replace("a", "$", $name);

function saberi($num1, $num2)
{
    if (($num1 || $num2) <= 0) die("Brojevi moraju biti veci od 0");
    return "rezultat je: " . $num1 + $num2;
}

$result = saberi(44, 55);

function isEven($number)
{
    if ($number % 2 == 0) return "Broj je paran";
    return "Broj nije paran";
}

$number = isEven(22);

function izracunajPDV(int $price)
{
    $pdv = 0.22;
    if (!is_numeric($price)) die ("Verdnost mora biti broj, ne string");
    if ($price <= 0) die("Broj ne moze biti manji od 1");
    return "PDV iznosi " . $price * $pdv . "$";
}

$pdv = izracunajPDV(333);

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
<h1><?= $name ?></h1>
<h1><?= $calculated ?></h1>
<h1><?= $number ?></h1>
<h1><?= $pdv ?></h1>
</body>
</html>

