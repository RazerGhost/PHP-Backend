<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <title>Klanten</title>
</head>

<body>
    <?php include "nav.php"; ?>
    <div class="centered">
        <div class="row">
            <form action="klant-verwijder.php" method="post">
                <div class="form-inner">
                    <h1>Klant verwijderen</h1>
                    <div class="input-wrap">
                        <label for="id">Klant ID</label>
                        <input type="number" name="id" id="id" required>
                    </div>
                    <button type="submit">Verstuur</button>
                </div>
            </form>
        </div>
    </div>
    <script src="./assets/js/script.js"></script>
</body>

</html>