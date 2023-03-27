<table border="0" cellspacing="0">
    <h1 style="text-align: center;">Voorraad rapport</h1>
    <thead>
        <tr>
            <th>Titel</th>
            <th>Artiest</th>
            <th>Genre</th>
            <th>Prijs</th>
            <th>Voorraad</th>
        </tr>
        <?php
        include 'conn.php';
        $count = 0;
        try {
            $sql = "SELECT voorraad FROM album";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $kolommen = $stmt->fetch(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
        $bgcolor = true;
        $stmt->execute();

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            if ($row['voorraad'] < 50) {
                $count++;
            }
        }
        echo '<p style="text-align: center;">Totaal titels met voorad onder de 50 is ' . $count . '</p>';
        ?>
    </thead>
    <tbody>
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


    </tbody>
</table>