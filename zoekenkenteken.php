<h1>zoeken naar auto's met kenteken</h1>
<form method="POST">
    <input type="text" name="zoek"/>
    <input type="submit" value="zoek"/>

    <?php
    require_once "gar-connect.php";
    if (isset($_POST['zoek'])){
    $zoek = $_POST['zoek'];
    $autos = $conn->prepare("SELECT klantid,autokmstand,autotype,automerk,autokenteken FROM auto where autokenteken=:autokenteken");
    $autos->execute(["autokenteken" => $zoek]);

    foreach ($autos

    as $auto){
    ?>
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
echo "<tr>";
echo "<td>" . $auto["klantid"] . "</td>";
echo "<td>" . $auto["autokmstand"] . "</td>";
echo "<td>" . $auto["autotype"] . "</td>";
echo "<td>" . $auto["automerk"] . "</td>";
echo "<td>" . $auto["autokenteken"] . "</td>";
echo "</tr>";
echo "</table>";
}
}
    else{
        echo 'voer wat in';
    }








