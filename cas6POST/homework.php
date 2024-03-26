<?php

if ($_SERVER['REQUEST_METHOD'] !== "POST") {
    header("Location:index.php?form-is-not-method-post");
}

if (!isset($_POST['name'])) {
    header("Location:index.php?wrong-input-type");
}

if ($_POST['name'] === "") header("Location:index.php?wrong-input-type");

$peoples = ["Maki","Toma","Pera","Laza"];

if (!in_array(strtolower($_POST['name']),array_map('strtolower',$peoples))){
    $message = "Nema korisnika u listi";
} else{
//    mozda array_search da ga izvucemo iz liste umesto iz $_POST[]
    $message = "Uspesno smo pornasli korisnija ".$_POST['name'];
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
<h1><?=$message?></h1>
</body>
</html>


