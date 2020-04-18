<?php
session_start();
if(isset($_SESSION['username'])) {
    if (isset($_POST['verzenden'])) {
        $klantid = $_POST['klantid'] + 0;
        $autokmstand = $_POST['autokmstand'];
        $autotype = $_POST['autotype'];
        $automerk = $_POST['automerk'];
        $autokenteken = $_POST['autokenteken'];


        if ($autokmstand || $autokenteken || $automerk || $autotype || $klantid != null) {
            require_once "gar-connect.php";


            $sql = $conn->prepare("insert into auto values (:klantid,:autokmstand,:autotype,:automerk,:autokenteken)");
            $sql->execute([
                    "klantid" => $klantid,
                    "autokmstand" => $autokmstand,
                    "autotype" => $autotype,
                    "automerk" => $automerk,
                    "autokenteken" => $autokenteken
                ]
            );
            echo "de auto is toegevoegd \n";
            echo "<a href =menu.php>terug naar de hoofdpagina</a>";
        }
    } else {
        echo 'vul wat in';
    }
    ?>
    <h1>garage create auto</h1>
    <p1>dit formulier wordt gebruikt om auto gegevens in te voeren</p1>
    <form method="post">
    <?php

    echo '<br>Klantid:<input type="number" name="klantid"<br>';
    echo '<br>autokmstand:<input type="number" name="autokmstand"<br>';
    echo '<br>autotype:<input type="text" name="autotype"<br>';
    echo '<br>automerk:<input type="text" name="automerk"<b>';
    echo '<br>autokenteken:<input type="text" name="autokenteken"<b>';
    echo '<input type="submit" name="verzenden" value="verzenden">';
}
else {
        echo "je hebt geen toegang tot deze pagina!<br>";
        echo "terug naar <a href='menu.php'> hoofdmenu</a>";}
