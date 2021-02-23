<?php
session_start();
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Futóverseny</title>
</head>
<body>
<div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="index.php">Főoldal</a></li>
            <li class="nav-item"><a class="nav-link" href="index.php?p=statisztika.php">Statisztika</a></li>
            <li class="nav-item"><a class="nav-link" href="index.php?p=ranglista.php">Ranglista</a></li>
            <li class="nav-item"><a class="nav-link" href="index.php?p=kiskoruak.php">Kiskorúak</a></li>
        </ul>
    </nav>
</div>
<div class="tarolo">
    <?php
        if(isset($_GET["p"])){
            include $_GET['p'];
        }
        else include("fooldal.php");
    ?>
</div>
<script src="bootstrap/jquery.min.css"></script>
<script src="bootstrap/popper.min.js"></script>
<script src="bootstrap/bootstrap.min.js"></script>
</body>
</html>