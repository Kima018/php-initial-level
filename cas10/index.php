<?php

function calculateDelivery(int $price, string $city)
{
    $delivery = [
        "Subotica" => 220,
        "Pancevo" => 10,
        "Sarajevo" => 292,
        "Split" => 799
    ];

    $priceList = [
        "1" => 200,
        "2" => 350,
        "3" => 500,
    ];
    
    if (!array_key_exists($city, $delivery)) die("Grad ne postoji");
    $deliveryPrice = $priceList['1'];
    if ($delivery[$city] <= 200 && $delivery[$city] > 100) $deliveryPrice = $priceList['2'];
    if ($delivery[$city] > 200) $deliveryPrice = $priceList['3'];

    return [
        "city" => $city,
        "km" => $delivery[$city],
        "deliveryPrice" => $deliveryPrice,
        "totalPrice" => $price + $deliveryPrice
    ];

}

$delivery = calculateDelivery(2000, "Subotica");
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
<h1>Rastojanje Beograd - <?= $delivery['city'] ?> je <?= $delivery['km'] ?>km i cena dostave
    je <?= $delivery['deliveryPrice'] ?> din.</h1>
<h2>Ukupna cena sa dostavom iznosi <?= $delivery['totalPrice'] ?> din.</h2>
</body>
</html>

