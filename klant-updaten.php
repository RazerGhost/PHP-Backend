<?php
include 'conn.php';

if (isset($_POST['id']) && !empty($_POST['id'])) {
    $id = $_POST['id'];
    $voornaam = $_POST['voornaam'];
    $naam = $_POST['naam'];
    $adres = $_POST['adres'];
    $postcode = $_POST['postcode'];
    $woonplaats = $_POST['woonplaats'];
    $email = $_POST['email'];

    try {
        $sql = "UPDATE klant SET voornaam = ?, naam = ?, adres = ?, postcode = ?, woonplaats = ?, email = ? WHERE ID = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$voornaam, $naam, $adres, $postcode, $woonplaats, $email, $id]);
        echo "<script>alert('Succesvol Gewijzigd'); location.href = 'klanten.php'; </script>";
    } catch (PDOException $e) {
        echo "Error updating record: " . $e->getMessage();
    }
} else {
    echo "Invalid request.";
}
?>
