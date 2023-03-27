<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;1,400;1,500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>VinylShop</title>
</head>

<body>
    <?php include "nav.php"; ?>



    <section class="klanten-section">
        <div class="container">
            <div class="row">
                <div class="table">
                    <table>
                        <caption>
                            <h3>Klanten</h3>
                        </caption>
                        <thead>
                            <?php

                            include 'conn.php';
                            try {
                                $sql = "SELECT * FROM album";
                                $stmt = $pdo->prepare($sql);
                                $stmt->execute();
                                $kolommen = $stmt->fetch(PDO::FETCH_ASSOC);

                            } catch (PDOException $e) {
                                echo $sql . "<br>" . $e->getMessage();
                            }
                            foreach ($kolommen as $value => $key) {
                                echo "<th><b>" . $value . "</b></th>";
                            }


                            echo "</tr>";
                            echo "</thead>";
                            echo "<tbody>";


                            $bgcolor = true;
                            $stmt->execute();

                            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                echo ($bgcolor ? "<tr bgcolor='#f2f2f2'>" : "<tr>");
                                echo "<td>" . $row['ID'] . "</td>";
                                echo "<td>" . $row['titel'] . "</td>";
                                echo "<td>" . $row['artiest'] . "</td>";
                                echo "<td>" . $row['genre'] . "</td>";
                                echo "<td>" . $row['prijs'] . "</td>";
                                echo "<td>" . $row['voorraad'] . "</td>";
                                $bgcolor = ($bgcolor ? false : true);
                            }


                            ?>
                        </thead>
                    </table>
                </div>

            </div>
        </div>
    </section>








    <script src="./assets/js/script.js"></script>
</body>

</html>