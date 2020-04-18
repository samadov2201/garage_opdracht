<h1>alle klanten</h1>
<table>
<tr>
    <td>klantID</td>
    <td>klantnaam</td>
    <td>klantadres</td>
    <td>klantpostcode</td>
    <td>klantplaats</td>
    </tr>
    <td>
<?php
require_once "gar-connect.php";
$klanten = $conn->prepare("SELECT klantid,klantnaam,klantadres,klantpostcode,klantplaats
 FROM klanten");
$klanten->execute();


foreach ($klanten as $klant) {
    echo "<tr>";
    echo "<td>" . $klant["klantid"] . "</td>";
    echo "<td>" . $klant["klantnaam"] . "</td>";
    echo "<td>" . $klant["klantadres"] . "</td>";
    echo "<td>" . $klant["klantpostcode"] . "</td>";
    echo "<td>" . $klant["klantplaats"] . "</td>";
    echo "</tr>";
}
echo "</table>";
echo "<a href =menu.phpmenu.php>terug naar de hoofdpagina</a>";
?>

