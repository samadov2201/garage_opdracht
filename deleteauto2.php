<?php
session_start();
if (isset($_SESSION['username'])) {
$verwijdervak=$_POST["verwijdervakauto"];
$autokenteken=$_POST["autokenteken"];
if ($verwijdervak == 1){
    require_once "gar-connect.php";
    $sql = $conn ->prepare("delete from auto where autokenteken=:autokenteken");
    $sql -> execute (["autokenteken" => $autokenteken]);
    echo "de gegevens zijn verwijderd <br  />";
}
else {
    echo "niets is verwijderd";
}
echo "terug naar <a href='menu.php'> hoofdmenu</a>";
}
else{
    echo "je hebt geen toegang tot deze pagina!<br>";
    echo "terug naar <a href='menu.php'> hoofdmenu</a>";

}