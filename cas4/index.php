<?php
if (!$_SERVER["REQUEST_METHOD"] == "POST") die("Pogresna metoda u formi");
if (!isset($_POST['name'], $_POST['password'])) die("Polja ne postoje");

$output = "";
$output = checkUser(strtolower($_POST['name']), $_POST['password']);
function checkUser(string $name, string $password): string
{
    if ($name === "administrator" && $password === 'mojaSifraJeSigurna') {
        return "Dobro dosao Admine";
    } else {
        return "Pogresno korisnicko ime ili lozinka";
    }
}


$current_time = date("H");
$part_of_the_day = match (true) {
    $current_time >= 5 && $current_time < 12 => "jutro",
    $current_time >= 12 && $current_time < 20 => "popodne",
    default => "noc",
}; ?>

<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<br>
<form action="" method="POST">
    <h2>Unesi podatke admine</h2>
    <input type="text" name="name" placeholder="enter username"/>
    <input type="password" name="password" placeholder="enter password"/>
    <input type="submit" value="Submit"/>
</form>
<br>

<h1><?= $output ?></h1>
<h3>Trenutno je <?= $part_of_the_day ?> </h3>
</body>
</html>