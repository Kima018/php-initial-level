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


function izdracunajDostavu($city)
{
    $dostava = [
        "Subotica" => 220,
        "Pancevo" => 10,
        "Sarajevo" => 292,
        "Split" => 799
    ];

    $cenaDostave = [
        "1" => 200,
        "2" => 350,
        "3" => 500,
    ];

    foreach ($dostava as $grad => $razdaljina){
        if ($razdaljina<=100) return $cenaDostave['1']=200;
        if ($razdaljina<=200) return $cenaDostave['2']=200;
        if ($razdaljina<=100) return $cenaDostave['1']=200;
    }

    if ($city == "Subotica") {
        return "Rastojanje Beograd - " . $city . "je" . $dostava['Subotica'] ."km, dostava je " . $cenaDostave['1'] ;
    }


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
<h1><?= $name ?></h1>
<h1><?= $result ?></h1>
<h1><?= $number ?></h1>
<h1><?= $pdv ?></h1>
</body>
</html>

