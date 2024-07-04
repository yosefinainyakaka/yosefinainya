<?php
    require_once "db.php";

    $data = [
        "Nama_Pelanggan" => "Nama_Pelanggan = \"{$_POST['Nama_Pelanggan']}\"",
        "Tanggal_Estimasi_Harga" => "Tanggal_Estimasi_Harga = '{$_POST['Tanggal_Estimasi_Harga']}",
        "Total_Harga" => "Total_Harga = '{$_POST['Total_Harga']}'",
        "Tanggal_Service" => "Tanggal_Service = '{$_POST['Tanggal_Service']}'",
        "Status" => "Status =  STR_TO_DATE(\"{$_POST['Status']}\", \"%Y-%m-%d\")",
    ];
    $datastring = implode(',',$data);

    $query = "UPDATE service_header SET {$datastring} WHERE id = {$_POST['id']}";
    var_dump($query);
    $getdata = mysqli_query($conn,$query);
    // header("location: listservice.php");
?>