<?php
session_start();
if(isset($_SESSION['username'])) {
    $klantid = $_POST['klantupdate'];
    require_once "gar-connect.php";
    $klanten = $conn->prepare("select klantid,klantnaam, klantadres, klantpostcode, klantplaats FROM klanten where klantid = :klantid ");
    $klanten->execute(["klantid" => $klantid]);
    echo "<form method='post' action='update3.php'>";

    foreach ($klanten as $klant) {
        if ($klant['klantnaam'] != null) {
            echo "Klantid=" . $klantid;
            echo "<input type='hidden' name='klantupdate' value='" . $klant["klantid"] . "'><br  />";

            echo "klantnaam=";
            echo "<input type='text' name='klantnaam' value='" . $klant["klantnaam"] . "'><br  />";

            echo "klantadres";
            echo "<input type='text' name='klantadres' value='" . $klant["klantadres"] . "'><br  />";

            echo "klantpostcode=";
            echo "<input type='text' name='klantpostcode' value='" . $klant["klantpostcode"] . "'><br  />";

            echo "klantplaats=";
            echo "<input type='text' name='klantplaats' value='" . $klant["klantplaats"] . "'><br  />";
        } else {
            echo "Klantid bestaat niet";
        }
    }
    ?>
    <input type="submit">
    <?php
}
else{
    echo "je hebt geen toegang tot deze pagina!<br>";
    echo "terug naar <a href='menu.php'> hoofdmenu</a>";

}