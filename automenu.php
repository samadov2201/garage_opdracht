<h1>autos met eigenaren.</h1>
<p>de autos die u hier niet ziet hebben geen eigenaren</p>
<table>
    <tr>
        <td>klantID</td>
        <td>autokmstand</td>
        <td>autotype</td>
        <td>automerk</td>
        <td>autokenteken</td>
        <td>eigenaar</td>
    </tr>
    <td>
        <?php
session_start ();

    require_once "gar-connect.php";
    $autos = $conn->prepare("SELECT * FROM auto inner join klanten ON auto.klantid = klanten.klantid");
    $autos->execute();

    foreach ($autos as $auto) {
        echo "<tr>";
        echo "<td>" . $auto["klantid"] . "</td>";
        echo "<td>" . $auto["autokmstand"] . "</td>";
        echo "<td>" . $auto["autotype"] . "</td>";
        echo "<td>" . $auto["automerk"] . "</td>";
        echo "<td>" . $auto["autokenteken"] . "</td>";
        echo "<td>" . $auto["klantnaam"] . "</td>";
        echo "</tr>";
    }

