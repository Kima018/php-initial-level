<?php

if ($_SERVER['REQUEST_METHOD'] !== "POST") {
    header("Location:index.php?form-is-not-method-post");
}

if (!isset($_POST['username'], $_POST['password'])) {
    header("Location:index.php?wrong-input-type");
}

if (in_array("",[trim($_POST['username']), $_POST['password'],$_POST['pin_code']])){
    $message = "Nisu prosledjeni podaci";
}else if (strlen($_POST['pin_code'])!== 4){
    $message="Pin mora sadrzati 4 cifre";
}else{
    $message="Uspesno ste se registrovali";
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








