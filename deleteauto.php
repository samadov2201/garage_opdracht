<?php  session_start();
    if (isset($_SESSION['username'])){

echo "<h1>autos verwijderen</h1>";
echo "<form method=POST>";
    echo "<input type=text name= zoek/>";
   echo "<input type=submit />";
echo "</form>";
        require_once "gar-connect.php";
        if (isset($_POST['zoek'])) {
            $zoek = $_POST['zoek'];
            $autos = $conn->prepare("SELECT klantid,autokmstand,autotype,automerk,autokenteken FROM auto where autokenteken=:autokenteken");
            $autos->execute(["autokenteken" => $zoek]);

            foreach ($autos as $auto) {
                ?>
                <table>
                    <tr>
                        <td>klantID</td>
                        <td>autokmstand</td>
                        <td>autotype</td>
                        <td>automerk</td>
                        <td>autokenteken</td>
                    </tr>
                    <td>
                <?php
                echo "<tr>";
                echo "<td>" . $auto["klantid"] . "</td>";
                echo "<td>" . $auto["autokmstand"] . "</td>";
                echo "<td>" . $auto["autotype"] . "</td>";
                echo "<td>" . $auto["automerk"] . "</td>";
                echo "<td>" . $auto["autokenteken"] . "</td>";
                echo "</tr>";
                echo "</table>";
            }
            echo "<table> <br   />";
            echo "<form action= 'deleteauto2.php' method='post'>";
            echo "<input type='hidden' name='autokenteken' value='$zoek'> ";
            echo "<input type='hidden' name='verwijdervakauto' value='0'>";
            echo "<input type='checkbox' name='verwijdervakauto' value='1'>";
            echo "verwijder deze auto";
            echo "<input type='submit'>";
            echo "</form>";
        } else {
            echo '<br>voer wat in';
        }
    }
    else{
             echo "je hebt geen toegang tot deze pagina!<br>";
        echo "terug naar <a href='menu.php'> hoofdmenu</a>";

    }