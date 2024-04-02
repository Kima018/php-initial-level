<?php
if (!isset($_GET['price'],$_GET['price'])){
    header("index.php?=nije-prosledjen-parametar");
    exit();
}

$final_price = 0;
$entry_price =intval($_GET['price']);
$type_of_product=$_GET['type'];
if ($type_of_product==="food"){
    $final_price=$entry_price + 150;
}elseif ($type_of_product==="pc_components"){
    $final_price=$entry_price + 350;
}
if (isset($_GET['add_pdv'])){
    $final_price+=$final_price*0.2;
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
<h1><?= $final_price ?>$</h1>
</body>
</html>