<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Document</title>
</head>

<body>
    <?php
    include 'conn.php';
    try {
        $sql = "SELECT * FROM klant WHERE ID = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array($_GET['id']));
        $klanten = $stmt->fetchall(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    include "nav.php";

    foreach ($klanten as $klant) {
        ?>
        <div class="centered">
        <form action="klant-updaten.php" method="post">
            <div class="form-inner">
                <h1>Klant bewerken</h1>
                <input type="hidden" name="id" id="id" value="<?php echo $klant['ID']; ?>">
                <div class="input-wrap">
                    <label for="voornaam">Wat is je voornaam?</label>
                    <input type="text" name="voornaam" id="voornaam" value="<?php echo $klant['voornaam'] ?>" required>
                </div>
                <div class="input-wrap">
                    <label for="naam">Wat is je achternaam?</label>
                    <input type="text" name="naam" id="naam" value="<?php echo $klant['naam'] ?>" required>
                </div>
                <div class="input-wrap">
                    <label for="adres">Wat is je straatnaam en nummer?</label>
                    <input type="text" name="adres" id="adres" value="<?php echo $klant['adres'] ?>" required>
                </div>
                <div class="input-wrap">
                    <label for="postcode">Wat is je postcode?</label>
                    <input type="text" name="postcode" id="postcode" value="<?php echo $klant['postcode'] ?>" required>
                </div>
                <div class="input-wrap">
                    <label for="woonplaats">Wat is je woonplaats?</label>
                    <select name="woonplaats" id="woonplaats" required>
                        <option value="Amsterdam">Amsterdam</option>
                        <option value="Amstelveen">Amstelveen</option>
                        <option value="Rotterdam">Rotterdam</option>
                        <option value="Utrecht">Utrecht</option>
                    </select>
                </div>
                <div class="input-wrap">
                    <label for="email">Wat is je e-mailadres?</label>
                    <input type="text" name="email" id="email" value="<?php echo $klant['email'] ?>" required>
                </div>
                <button type="submit">Verstuur</button>
            </div>
        </form>
        </div>


        <?php


    }
    ?>
</body>

</html>