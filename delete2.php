<?php
session_start();
if(isset($_SESSION['username'])) {
    if (isset($_POST['verzenden'])) {
        $verwijdervak = $_POST["verwijdervak"];
        $klantid = $_POST["klantidvak"];
        echo $verwijdervak;
        if ($verwijdervak) {
            require_once "gar-connect.php";
            $sql = $conn->prepare("delete from klanten where klantid=:klantid");
            $sql->execute(["klantid" => $klantid]);
            echo "de gegevens zijn verwijderd <br  />";
        } else {
            echo "niets is verwijderd";
        }
        echo "terug naar <a href='menu.php'> hoofdmenu</a>";
    }
}
else {
    echo "je hebt geen toegang tot deze pagina!<br>";
    echo "terug naar <a href='menu.php'> hoofdmenu</a>";
}