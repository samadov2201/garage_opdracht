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
