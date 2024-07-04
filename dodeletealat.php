<?php
    require_once "db.php";

    $query = "DELETE FROM alat WHERE id = {$_GET['id']}";
    // var_dump($query);
    $getdata = mysqli_query($conn,$query);
    header("location: masteralat.php");
?>