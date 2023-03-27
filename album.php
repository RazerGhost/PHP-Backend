<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <title>Homepage</title>
</head>

<body>
<?php include "nav.php"; ?>

    <div class="centered">
        <form method="post" action="albumaction.php" class="formcenter">
            <H2>Nieuwe album</H2>
            <label for="titel">Titel?</label>
            <input type="text" id="titel" name="titel">
            <label for="artiest">Artiest?</label>
            <input type="text" id="artiest" name="artiest">
            <label for="genre">Genre?</label>
            <input type="text" id="genre" name="genre">
            <label for="prijs">Prijs?</label>
            <input type="text" id="prijs" name="prijs">
            <label for="voorraad">Voorraad? </label>
            <input type="text" id="voorraad" name="voorraad">
            <input name="submit" type="submit" value="submit" class="submit">
        </form>

    </div>
</body>

</html>