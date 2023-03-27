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



        <div class="row">

            <?php
            include "conn.php";
            try {
                $sql = "DELETE FROM klant WHERE ID= ? ";
                $stmt = $pdo->prepare($sql);
                $stmt->execute(array($_GET['id']));
                $klanten = $stmt->fetchall(PDO::FETCH_ASSOC);
                echo "<script>alert('Klant Verwijdert'); location.href = 'klanten.php'; </script>";
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
            ?>
        </div>
    </div>





    <script src="./assets/js/script.js"></script>
</body>

</html>