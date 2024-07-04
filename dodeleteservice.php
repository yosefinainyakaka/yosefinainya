<?php
    require_once "db.php";

    $query = "DELETE FROM service_header WHERE id = {$_GET['id']}";
    // var_dump($query);
    $getdata = mysqli_query($conn,$query);
    header("location: listservice.php");
?>