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
