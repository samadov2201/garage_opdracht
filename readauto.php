<h1>alle auto's</h1>
<table>
    <tr>
        <td>klantID</td>
        <td>autokmstand</td>
        <td>autotype</td>
        <td>automerk</td>
        <td>autokenteken</td>
    </tr>
    <td>
        <?php
        require_once "gar-connect.php";
        $autos = $conn->prepare("SELECT klantid,autokmstand,autotype,automerk,autokenteken FROM auto");
        $autos->execute();


        foreach ($autos as $auto) {
            echo "<tr>";
            echo "<td>" . $auto["klantid"] . "</td>";
            echo "<td>" . $auto["autokmstand"] . "</td>";
            echo "<td>" . $auto["autotype"] . "</td>";
            echo "<td>" . $auto["automerk"] . "</td>";
            echo "<td>" . $auto["autokenteken"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        echo "<a href =menu.phpmenu.php>terug naar de hoofdpagina</a>";
        ?>

<?php
