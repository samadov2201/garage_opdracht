<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        #Background {
            background: linear-gradient(180deg, rgba(0,0,0,1) 0%, rgba(145,145,145,1) 0%, rgba(255,255,255,1) 100%);
            background-repeat: no-repeat;
        }
    </style>
</head>
<body id="Background">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>

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







