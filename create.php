
<?php
session_start();
if(isset($_SESSION['username'])) {
    $klantnaam = filter_input(INPUT_POST, 'klantnaam');
    $klantadres = filter_input(INPUT_POST, 'klantadres');
    $klantpostcode = filter_input(INPUT_POST, 'klantpostcode');
    $klantplaats = filter_input(INPUT_POST, 'klantplaats');
    $klantid = null;
    if ($klantplaats || $klantpostcode || $klantadres || $klantnaam || $klantid != null) {
        require_once "gar-connect.php";

        $sql = $conn->prepare("insert into klanten values ( :klantid, :klantnaam, :klantadres,:klantpostcode, :klantplaats)
");
        $sql->execute([
                "klantid" => $klantid,
                "klantnaam" => $klantnaam,
                "klantadres" => $klantadres,
                "klantpostcode" => $klantpostcode,
                "klantplaats" => $klantplaats
            ]
        );
        echo "<br>de klant is toegevoegd <br   />";
        echo "<a href =menu.phpmenu.php>terug naar de hoofdpagina</a>";
    } else {
        echo "<br>vul de formulier in";
    } ?>
    <h1>garage create klant</h1>
    <p1>dit formulier wordt gebruikt om klant gegevens in te voeren</p1>
    <form method="post">
    <?php
    echo '<br>Klantnaam:<input type="text" name="klantnaam"<br>';
    echo '<br>Klantadres:<input type="text" name="klantadres"<br>';
    echo '<br>Klantpostcode:<input type="text" name="klantpostcode"<br>';
    echo '<br>Klantplaats:<input type="text" name="klantplaats"<b>';
    echo '<input type="submit" value="verzenden">';
}
else {
    echo "je hebt geen toegang tot deze pagina!<br>";
    echo "terug naar <a href='menu.php'> hoofdmenu</a>";
}