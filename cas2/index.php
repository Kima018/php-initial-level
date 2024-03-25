<?php
$site_title = "Postani programer";
$nav_links = [
    "glavna" => "#",
    "O nama" => "/oNama.php",
    "Kontakt" => "/kontakt.php"
];
$cars = [
    "brand" => "BMW",
    "model" => "M4 Competition",
    "year" => "2022"
];

$persons = [
    "Maki" => [
        "last_name" => "Jakovljevic",
        "birth_year" => 1998,
        "programmer" => true,
        "id_number" => 150799800000
    ]

];

$persons["Ana"] = [
    "last_name" => "Smith",
    "birth_year" => 1996,
    "programmer" => false,
    "id_number" => 170799800000
];

foreach ($persons as $person => $person_details){
    echo $person . " has " . (intval(date("Y")) - $person_details['birth_year']) . " years.". "</br>";
}

//array_push($persons, $new_person);
$filtred_data = array_column($persons, "last_name");

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $site_title ?></title>
</head>
<body>
<h1><?= $site_title ?></h1>
<nav>
    <ul style="display:flex;gap: 1rem;">
        <?php foreach ($nav_links as $link_title => $link) : ?>
            <li style="margin-left: 1rem;"><a href="<?= $link ?>">
                    <?= $link_title ?>
                </a></li>
        <?php endforeach; ?>
    </ul>
</nav>
<h2>Prodajem auto <?= $cars['brand'] . $cars['model'] ?> proizveden <?= $cars['year'] ?>.</h2>
<footer style="position: fixed; bottom: 0">
    <p>Copyrigt © makiFlow <?=date("Y")?></p>
</footer>
</body>
</html>
