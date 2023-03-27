<?php

include "conn.php";



$voornaam = $_POST['voornaam'];
$naam = $_POST['naam'];
$email = $_POST['email'];
$postcode = $_POST['postcode'];
$straatnummer = $_POST['adres'];
$woonplaats = $_POST['woonplaats'];

$query = "INSERT INTO klant (ID, voornaam, naam, adres, postcode, woonplaats, email) VALUES (null,?,?,?,?,?,?)";
$sth = $pdo->prepare($query);


try {
    $sth->execute([$voornaam, $naam, $straatnummer, $email, $postcode, $woonplaats]);
    echo "<script>alert('Klant toegevoegd'); location.href = 'index.php'; </script>";
} catch (PDOException $e) {
    echo "<script>alert('Er is iets misgegaan')</script>";
}
