<?php 

require 'konekcija.php';

$naziv = $_POST['naziv'];
$opis = $_POST['opis'];
$cena = $_POST['cena'];


// bazo moja, ubaci mi u tabelu products sledece vrednosti...
$baza = "INSERT INTO products VALUES(NULL, '$naziv', '$opis', '$cena')";

// komanda da taj upit ode prema bazi
$upit = mysqli_query($konekcija, $baza);

if($upit){
    header('Location:index.php');
}