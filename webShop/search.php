<?php

global $db;
if (!isset($_GET['email']) || empty($_GET['email'])){
    die("Niste uneli email adresu");
}

require_once "db.php";

$email = $_GET['email'];
$result = $db->query("SELECT * FROM user WHERE email='$email'");
if ($result->num_rows >=1 ){
    echo "Nasli smo korisnika sa email adresom";
}