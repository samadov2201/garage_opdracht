<?php session_start(); if(isset($_SESSION['username'])) { ?>
    <form method="post" action="update2.php">
        <h1>Update hier info over een klant met de klant ID</h1>
        <p>voer klantID in:</p>
        <input type="number" name="klantupdate"/>
        <input type="submit" value="verzend">
    <?php
}
else{
    echo "je hebt geen toegang tot deze pagina!<br>";
    echo "terug naar <a href='menu.php'> hoofdmenu</a>";

}