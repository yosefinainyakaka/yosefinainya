<?php
    require_once "db.php";

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="navbar">
        <div class="navbar-item"><a href="masteralat.php" target="_blank"> Master Data Alat</a></div>
        <div class="navbar-item"><a href="masterpelanggan.php">Pelanggan</a></div>
        <div class="navbar-item"><a href="service.php">Service</a></div>
    </div>
    <div class="content"> 
        welcome <?= $_SESSION['username'] ?>
    </div>
    
</body>
</html>