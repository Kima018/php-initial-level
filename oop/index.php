<?php
require_once "Models/Car.php";
require_once "Models/Person.php";
require_once "Models/User.php";
require_once "Models/DataBase.php";


//$hyndaiElantra = new Car();
//$hyndaiElantra->brand="Hyundai";
//$hyndaiElantra->model="Elantra";
//$hyndaiElantra->color="Silver";

//$hyndaiElantra->showCarName();
//
//$person = new Person();
//$person->name = "Pera";
//$person->lastName = "Peric";
//$person->birthYear = 1996;
//$person->height = 184;
//$person->weight = 90;
//
//$person->currentPersonYear();
//
//
//$userMaki = new User("Kima","12345!");
//$userMaki->saveUser();
//$conn = new DataBase();
//
//



$audi = new Car("Audi","A5", "Crvena");
$yugo = new Car("Yugo","Koral 55", "Bela");
$bmw= new Car("BMW","X5", "Zuta");

