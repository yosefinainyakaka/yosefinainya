<?php
    require_once "db.php";


    $query ="SELECT MAX(ID) AS id FROM pelanggan";
    $getdata = mysqli_query($conn,$query);
    $iddata = [];
    $numrows = mysqli_num_rows($getdata);

    if ($numrows > 0) {
        while ($rows = mysqli_fetch_assoc($getdata)) {
            $iddata[] = $rows;
        }
    }
    $data = [
        "id" => $iddata[0]['id']+1,
        "Nama_Pelanggan" => "'{$_POST['Nama_Pelanggan']}'",
        "Email" => "'{$_POST['Email']}'",
        "Nomor_Telepon" => "'{$_POST['Nomor_Telepon']}'",
        "Alamat" => "'{$_POST['Alamat']}'",
        "Tanggal" => "STR_TO_DATE(\"{$_POST['Tanggal']}\", \"%Y-%m-%d\")",
    ];
    $datastring = implode(',',$data);

    $query = "INSERT INTO pelanggan VALUES ({$datastring})";
    //var_dump($query);
    $getdata = mysqli_query($conn,$query);
    header("location: masterpelanggan.php");
?>