<?php

if (!isset($_POST['name'],$_POST['description'],$_POST['price'],$_POST['purchase_date'],$_POST['quantity'])){
    echo "Polje ne postoji";
}
$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];
$purchaseDate = $_POST['purchase_date'];
$quantity = $_POST['quantity'];

if (in_array("",[$name,$description,$price,$purchaseDate,$quantity])){
    echo "Niste uneli neko polje";
    exit();
}

$db = mysqli_connect("localhost", "root", "", "prvi_cas");
if (mysqli_connect_error()){
    echo "Konekcija sa bazom nije uspesna";
    exit();
}

$query = "INSERT INTO proizvodi (name,description,price,purchase_date,quantity) VALUES ('$name','$description',$price,'$purchaseDate','$quantity')";

var_dump($query);
$db->query($query);





