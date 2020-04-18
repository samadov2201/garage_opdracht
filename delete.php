<?php
session_start();
if(isset($_SESSION['username'])) {
    $klantid = $_POST['klantid'];

    require_once "gar-connect.php";
    $klanten = $conn->prepare("select klantid,klantnaam, klantadres, klantpostcode, klantplaats FROM klanten where klantid = :klantid ");
    $klanten->execute(["klantid" => $klantid]);
    echo "<table>";
    foreach ($klanten as $klant) {
        echo "<tr>";
        echo "<td>" . $klant["klantid"] . "</td>";
        echo "<td>" . $klant["klantnaam"] . "  </td>";
        echo "<td>" . $klant["klantadres"] . "</td>";
        echo "<td>" . $klant["klantpostcode"] . " </td>";
        echo "<td>" . $klant["klantplaats"] . "</td>";
        echo "</tr>";

    }
    echo "<table> <br   />";
    echo "<form action= 'delete2.php' method='post'>";
    echo "<input type='hidden' name='klantidvak' value='$klantid'> ";
    echo "<input type='hidden' name='verwijdervak' value= 0>";
    echo "<input type='checkbox' name='verwijdervak' value= 1>";
    echo "verwijder deze klant";
    echo "<input type='submit'>";
    echo "</form>";
    ?>
    <h1>verwijder hier de klanten uit de database</h1>
    <form method="post">
        <p1>voer de klantID in:</p1>
        <input type="number" name="klantid">
        <input type="submit">
    </form>
    <?php
}
else {
    echo "je hebt geen toegang tot deze pagina!<br>";
    echo "terug naar <a href='menu.php'> hoofdmenu</a>";}
