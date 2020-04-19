<?php
session_start();
$connect = new mysqli('localhost', 'root', '', 'garage') or die(mysqli_error($connect));
if(isset($_POST["register"])) {
    if (empty($_POST["username"]) || empty($_POST["password"])) {
        echo '<script>alert("Both Fields are required")</script>';
    } elseif (($_POST["username"]) || empty($_POST["password"])) {
        $username = mysqli_real_escape_string($connect, $_POST["username"]);
        $password = mysqli_real_escape_string($connect, $_POST["password"]);
        $verify = mysqli_real_escape_string($connect, $_POST["verification"]);
        $password = password_hash($password, PASSWORD_DEFAULT);
        $hash = "$2y$12$9LfadpOsmIT/WlI6ZXgoU.iJHilyPuEjTdYToOdeTI4Zvu7JQ8/EW";
        if (password_verify($verify, $hash)) {

            $query = "INSERT INTO login(username, userpass) VALUES('$username', '$password')";
            if (mysqli_query($connect, $query)) {
                echo '<script>alert("Registration Done")</script>';
            } else {
                echo 'username bestaat al';
            }

        } else {
            echo "verificatiecode is verkeerd";
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Sameydov</title>
    <link rel="stylesheet" href="site.css" />
</head>
<body>

<br /><br />
<div class="container" style="width:500px;">
    <h3 align="center">registeer hier nieuwe admins!</h3>
    <br />

        <h3 align="center">Register</h3>
        <br />
        <form method="post">
            <label>gebruikersnaam</label>
            <input type="text" name="username" class="form-control" />
            <br />
            <label> wachtwoord</label>
            <input type="password" name="password" class="form-control" />
            <br />
            <label> verificatiecode</label>
            <input type="password" name="verification" class="form-control" />
            <br />
            <input type="submit" name="register" value="Register" class="btn btn-info" />
            <br />
            <p align="center"><a href="index.php?action=login">Login</a></p>
        </form>

    }

</div>
</body>
</html>
