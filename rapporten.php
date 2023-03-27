<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <title>Rapport</title>
</head>

<body>
    <?php
    include_once('nav.php');
    ?>

    <main class="table">
        <center>
            <article>
                <form name="rapporten" id="rapporten" action="" method="post">
                    <select style="font-size: 1.0rem" name="rapport">
                        <option value="">Rapport selecteren</option>
                        <option value="orders">Orders</option>
                        <option value="voorraad">Voorraad</option>
                    </select>
                    <div>
                        <input type="submit" id="submit" name="submit" value="&rarr;" />
                    </div><br>
                </form>
                <?php
                if (isset($_POST['submit'])) {
                    if ($_POST['rapport'] == "orders") {
                        include_once('orders_rapport.php');
                    } else if ($_POST['rapport'] == "voorraad") {
                        include_once('voorraad_rapport.php');
                    }
                }
                ?>
            </article>
        </center>
    </main>

</body>

</html>