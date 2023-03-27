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
        <form method="post" action="actionpage.php" class="formcenter">
            <H2>Nieuwe klant</H2>
            <label for="voornaam">Wat is je voornaam?</label>
            <input type="text" id="voornaam" name="voornaam">
            <label for="naam">Wat is je achternaam?</label>
            <input type="text" id="naam" name="naam">
            <label for="adres">Wat is je straatnaam en nummer?</label>
            <input type="text" id="adres" name="adres">
            <label for="postcode">Wat is je postcode?</label>
            <input type="text" id="postcode" name="postcode">

            <label for="woonplaats">Wat is je woonplaats?</label>
            <input list="browsers" name="woonplaats" /></label>
            <datalist id="browsers">
                <option value="Amsterdam">
                <option value="Utrecht">
                <option value="Den Haag">
                <option value="Amstelveen">
                <option value="Almere">
                <option value="Rotterdam">
            </datalist>
            <label for="email">Wat is je e-mailadres? </label>
            <input type="email" id="email" name="email">
            <input name="submit" type="submit" value="submit" class="submit">
        </form>

    </div>
</body>

</html>