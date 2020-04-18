<h1>zoeken naar klanten met klantID</h1>
<form method="POST">
    <input type="number" name="zoek"/>
    <input type="submit" value="zoek"/>

<?php
require_once "gar-connect.php";
$zoek=$_POST['zoek'];
$klantID= $conn->prepare("SELECT klantid,klantnaam,klantadres,klantpostcode,klantplaats FROM klanten where klantid= :klantid");
$klantID->execute(["klantid"=>$zoek]);

foreach ($klantID as $klant){
?>
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
echo "<tr>";
echo "<td>" . $klant["klantid"] . "</td>";
echo "<td>" . $klant["klantnaam"] . "</td>";
echo "<td>" . $klant["klantadres"] . "</td>";
echo "<td>" . $klant["klantpostcode"] . "</td>";
echo "<td>" . $klant["klantplaats"] . "</td>";
echo "</tr>";
echo "</table>";
}







