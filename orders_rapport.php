<table border="0" cellspacing="0">
    <h1 style="text-align: center;">Orders rapport</h1>
    <thead>
        <tr>
            <th>Klant</th>
            <th>Order</th>
            <th>Titel</th>
            <th>Aantal</th>
        </tr>
    </thead>
    <tbody>
        <?php

        include 'conn.php';

        $sql = "
            SELECT klant.naam, item.weborder_ID, 
            album.titel, item.aantal FROM klant
            INNER JOIN (weborder
            INNER JOIN (item
            INNER JOIN album ON album.ID = item.album_ID)
            ON weborder.ID = item.weborder_ID)
            ON klant.ID = weborder.klant_ID";


        $stmt = $pdo->prepare($sql);
        $stmt->execute(array());
        $orders = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $bgcolor = true;
        $weborder_ID = $orders[0]['weborder_ID'];
        $subtotaal = 0;
        $totaal = 0;
        $nieworder = true;
        foreach ($orders as $order) {
            if ($order['weborder_ID'] != $weborder_ID) {

                echo ($bgcolor ? "<tr bgcolor='#f2f2f2'>" : "<tr bgcolor='#DAD4D4'>");
                echo "<td></td><td></td><td>Subtotaal</td><td align='center'>" . $subtotaal . "</td></tr>";
                $totaal += $subtotaal;
                $subtotaal = 0;
                $nieworder = true;
                $weborder_ID = $order['weborder_ID'];
            }

            if ($nieworder) {
                $bgcolor = ($bgcolor ? false : true);
                echo ($bgcolor ? "<tr bgcolor='#f2f2f2'>" : "<tr bgcolor='#DAD4D4'>");
                echo "<td>" . $order['naam'] . "</td>
                    <td>" . $order['weborder_ID'] . "</td>";
                echo "
                    <td>" . $order['titel'] . "</td>
                    <td align='center'>" . $order['aantal'] . "</td></tr>";
                $subtotaal += $order['aantal'];
                $nieworder = false;
            } else {

                echo ($bgcolor ? "<tr bgcolor='#f2f2f2'>" : "<tr bgcolor='#DAD4D4'>");
                echo "<td></td><td></td>";
                echo "<td>" . $order['titel'] . "</td>
                    <td align='center'>" . $order['aantal'] . "</td></tr>";
                $subtotaal += $order['aantal'];

            }
        }


        echo ($bgcolor ? "<tr bgcolor='#f2f2f2'>" : "<tr bgcolor='#DAD4D4'>");
        echo "<td></td><td></td><td>Subtotaal</td><td align='center'>" . $subtotaal . "</td></tr>";
        $totaal += $subtotaal;
        echo "<td></td><td></td><td>Totaal</td><td align='center'>" . $totaal . "</td></tr>";

        ?>
    </tbody>
</table>