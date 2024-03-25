<?php
$output = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $output = checkUser(strtolower($_POST['name']), $_POST['password']);
}
function checkUser(string $name, string $password): string
{
    if ($name === "administrator" && $password === 'mojaSifraJeSigurna') {
        return "Dobro dosao Admine";
    } else {
        return "Pogresno korisnicko ime ili lozinka";
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
<form action="" method="POST">
    <input type="text" name="name" placeholder="enter username"/>
    <input type="password" name="password" placeholder="enter password"/>
    <input type="submit" value="Submit"/>
</form>
<h1><?= $output ?></h1>
</body>
</html>