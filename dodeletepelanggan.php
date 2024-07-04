<?php
    require_once "db.php";

    $query = "DELETE FROM pelanggan WHERE id = {$_GET['id']}";
    // var_dump($query);
    $getdata = mysqli_query($conn,$query);
    header("location: masterpelanggan.php");
?>