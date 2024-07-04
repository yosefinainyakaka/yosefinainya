<?php
    require_once "db.php";

    $data = [
        "Nama_Barang" => "Nama_Barang = \"{$_POST['Nama_Barang']}\"",
        "Jenis_Barang" => "Jenis_Barang = '{$_POST['Jenis_Barang']}",
        "Tanggal_Service" => "Tanggal_Service = '{$_POST['Tanggal_Service']}'",
        "Status_Service" => "Status_Service = '{$_POST['Status_Service']}'",
        "Delete" => "Delete =  STR_TO_DATE(\"{$_POST['Delete']}\", \"%Y-%m-%d\")",
    ];
    $datastring = implode(',',$data);

    $query = "UPDATE alat SET {$datastring} WHERE id = {$_POST['id']}";
    var_dump($query);
    $getdata = mysqli_query($conn,$query);
    // header("location: masteralat.php");
?>