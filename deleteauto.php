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