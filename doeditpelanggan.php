<?php
    require_once "db.php";

    $data = [
        "Nama_Pelanggan" => "Nama_Pelanggan = \"{$_POST['Nama_Pelanggan']}\"",
        "Email" => "Email = '{$_POST['Email']}",
        "Nomor_Telepon" => "Nomor_Telepon = '{$_POST['Nomor_Telepon']}'",
        "Alamat" => "Alamat = '{$_POST['Alamat']}'",
        "Tanggal" => "Tanggal =  STR_TO_DATE(\"{$_POST['Tanggal']}\", \"%Y-%m-%d\")",
    ];
    $datastring = implode(',',$data);

    $query = "UPDATE pelanggan SET {$datastring} WHERE id = {$_POST['id']}";
    var_dump($query);
    $getdata = mysqli_query($conn,$query);
    // header("location: masterpelanggan.php");
?>