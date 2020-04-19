<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Garage menu</title>

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

        <div class="col-*-*"><h1>Menu</h1></div><br>
            <a href="index.php">Inloggen</a><br>
            <a href="logout.php">Uitloggen</a><br><br>

    <!-- Klanten -->
        <h3>Klant</h3>
        <li>
            <div class="row">
            <div class="col-sm-4"><a href="create.php">Create</a></div><br>
            <div class="col-sm-4"><a href="read.php">Read</a></div><br>
            <div class="col-sm-4"><a href="zoekenklantid.php">Zoek op ID</a></div><br>
            <div class="col-sm-4"><a href="update.php">Update</a></div><br>
            <div class="col-sm-4"><a href="delete.php">Delete</a></div>
            </div>
        </li><br>
    <!-- Auto's -->
        <h3>Auto</h3>
        <li>
            <div class="row">
            <div class="col-sm-4"><a href="createauto.php">Create</a></div>
            <div class="col-sm-4"><a href="readauto.php">Read</a></div>
            <div class="col-sm-4"><a href="zoekenkenteken.php">Zoeken op kenteken</a></div>
            <div class="col-sm-4"><a href="updateauto.php">Update</a></div>
            <div class="col-sm-4"><a href="deleteauto.php">Delete</a></div>
            </div>
        </li><br>

        <h3>Autos van klanten</h3>
        <a href="automenu.php">Autos en eigenaren</a><br>


</body>
</html>