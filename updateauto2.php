<?php
session_start();
if(isset($_SESSION['username'])) {
    if ($_POST['klantupdate'] != null) {
        $kenteken = $_POST['klantupdate'];
        require_once "gar-connect.php";
        $autos = $conn->prepare("select * FROM auto where autokenteken = :autokenteken  ");
        $autos->execute(["autokenteken" => $kenteken]);
        echo "<form method='post' action='update3.php'>";

        foreach ($autos as $auto) {
            if ($auto['autokenteken'] != null) {
                echo "kenteken=" . $kenteken;
                echo "<input type='hidden' name='klantupdate' value='" . $auto["autokenteken"] . "'><br  />";

                echo "klantid=";
                echo "<input type='text' name='klantid' value='" . $auto["klantid"] . "'><br  />";

                echo "autokmstand=";
                echo "<input type='text' name='autokmstand' value='" . $auto["autokmstand"] . "'><br  />";

                echo "autotype=";
                echo "<input type='text' name='autotype' value='" . $auto["autotype"] . "'><br  />";

                echo "automerk=";
                echo "<input type='text' name='automerk' value='" . $auto["automerk"] . "'><br  />";

            } else {
                echo "kenteken bestaat niet";
            }
        }
        echo "<input type=submit>";
    } else {
        header("location: updateauto.php");
    }
}
else{
    echo "je hebt geen toegang tot deze pagina!<br>";
    echo "terug naar <a href='menu.php'> hoofdmenu</a>";

}


