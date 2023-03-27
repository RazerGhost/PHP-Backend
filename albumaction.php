<?php

include "conn.php";



$titel = $_POST['titel'];
$artiest = $_POST['artiest'];
$genre = $_POST['genre'];
$prijs = $_POST['prijs'];
$voorraad = $_POST['voorraad'];

$query = "INSERT INTO album (ID, titel, artiest, genre, prijs, voorraad) VALUES (null,?,?,?,?,?)";
$sth = $pdo->prepare($query);


try {
    $sth->execute([$titel, $artiest, $genre, $prijs, $voorraad]);
    echo "<script>alert('Succesvol toegevoegd'); location.href = 'album.php'; </script>";
} catch (PDOException $e) {
    echo "<script>alert('Er is iets misgegaan')</script>";
}
