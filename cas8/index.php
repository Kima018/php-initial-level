<?php
$cars = [
    "Zastava" => [
        "model" => "Yugo 55",
        "year" => 1995
    ],
    "Renault" => [
        "model" => "Megane RS",
        "year" => 2014
    ],
    "Toyota" => [
        "model" => "Rav4",
        "year" => 2021
    ]
];


function checkCarYears(string $car, int $carYearsOld, int $currYear)
{
    $carYears = $currYear - $carYearsOld ;

    if ($carYears <= 5) {
        return $car . " je Nov Auto";
    } elseif ($carYears <= 10) {
        return $car . " je Noviji Auto";
    } elseif ($carYears <= 20) {
        return $car . " je Star Auto";
    } else {
        return $car . " je oldtimer";
    }
}

$navLinks = [
    "glavna" => "#",
    "O nama" => "/oNama.php",
    "Kontakt" => "/kontakt.php"
];


$names = ["Toma", "Maki","Vlada", "Pera"];
//foreach ($names as &$name ){
//    $name = strtolower($name);
//}

$names = array_map("strtolower",$names);
var_dump($names);
$numbers = [2,4,3,5];
foreach ($numbers as &$number){
    $number = $number * $number;
}
var_dump($numbers);




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
<nav>
    <ul style="display:flex;gap: 1rem;">
        <?php foreach ($navLinks as $link_title => $link) : ?>
            <li style="margin-left: 1rem;"><a href="<?= $link ?>">
                    <?= $link_title ?>
                </a></li>
        <?php endforeach; ?>
    </ul>
</nav>
<?php foreach ($cars as $car => $car_details): ?>
<h2><?= checkCarYears($car,$car_details['year'],date("Y")) ?></h2>
<?php endforeach;?>
</body>
</html>
