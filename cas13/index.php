<?php
$baza = mysqli_connect("localhost", "root", "", "prvi_cas");

// -proceduralni
//mysqli_query($baza, "INSERT INTO korisnici (email,lozinka,datum_rodjenja) VALUES ('makijakov@hotmail.rs','12345','1998 - 07 - 15')");

// -OOP
//$baza->query("INSERT INTO korisnici (email,lozinka,datum_rodjenja) VALUES ('makijakov222@hotmail.rs','12345','1998 - 07 - 15')");
//
//$ime= "Kormpir";
//$opis = "Crveni krompir";
//$cena = 59;
//$datumNabavke = "2024-1-4";
//$kolicina = 100;
//
//$query = "INSERT INTO proizvodi(ime,opis,cena,datum_nabavke,kolicina) VALUES ('$ime','$opis',$cena,'$datumNabavke',$kolicina)";
//$baza->query($query);

