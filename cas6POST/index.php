<?php


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
<form method="POST" action="register.php">
    <input type="text" name="username" placeholder="makicar123">
    <input type="password" name="password" placeholder="******">
    <input type="number"  maxlength="4" placeholder="PIN" name="pin_code">
    <input type="submit" value="Register">
</form>
<br>
<br>
<br>
<!--HW-->
<form method="POST" action="homework.php">
    <input type="text" name="name" placeholder="Name">
    <input type="submit" value="Search">
</form>
</body>
</html>
