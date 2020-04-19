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
$connect = new mysqli('localhost', 'root', '', 'garage') or die(mysqli_error($connect));
session_start();
if(isset($_SESSION["username"]))
{
    header("location:menu.php");
}
if(isset($_POST["login"]))
{
    if(empty($_POST["username"]) || empty($_POST["password"]))
    {
        echo '<script>alert("VULLLL ALLLESS INN!!!")</script>';
    }
    else
    {
        $username = mysqli_real_escape_string($connect, $_POST["username"]);
        $password = mysqli_real_escape_string($connect, $_POST["password"]);
        $query = "SELECT * FROM login WHERE username = '$username'";
        $result = mysqli_query($connect, $query);
        if(mysqli_num_rows($result) > 0)
        {
            while($row = mysqli_fetch_array($result))
            {
                if(password_verify($password, $row["userpass"]))
                {
                    //return true;
                    $_SESSION["username"] = $username;
                    header("location:menu.php");
                }
                else
                {
                    //return false;
                    echo 'verkeerd G';
                }
            }
        }
        else
        {
            echo 'Verkeerd G';
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
    <h3 align="center"></h3>
    <br />
        <h3 align="center">Login</h3>
        <br />
        <form method="post">
            <label>Enter Username</label>
            <input type="text" name="username" class="form-control" />
            <br />
            <label>Enter Password</label>
            <input type="password" name="password" class="form-control" />
            <br />
            <input type="submit" name="login" value="Login" class="btn btn-info" />
            <br />
        </form>
    <h1>doorgaan als klant?</h1>>
    <br><a href='menu.php' class="btn btn-info"> klik hierop!</a>"
    <h1> nieuwe admin account aanmaken?</h1>
    <br>
    <a href="register.php" class="btn btn-info">klik hierop!</a>
