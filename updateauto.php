<?php session_start();
if(isset($_SESSION['username'])) { ?>
    <form method="post" action="updateauto2.php">
        <h1>Update hier info over een klant</h1>
        <p>voer de kenteken in:</p>
        <input type="text" name="klantupdate"/>
        <input type="submit" value="verzend">
    <?php
}
else{
    echo "je hebt geen toegang tot deze pagina!<br>";
    echo "terug naar <a href='menu.php'> hoofdmenu</a>";

}
