<?php
    require_once "db.php";


    $query ="SELECT MAX(ID) AS id FROM alat";
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
        "Nama_Barang" => "'{$_POST['Nama_Barang']}'",
        "Jenis_Barang" => "'{$_POST['Jenis_Barang']}'",
        "Tanggal_Service" => "'{$_POST['Tanggal_Service']}'",
        "Status" => "'{$_POST['Status']}'",
    ];
    $datastring = implode(',',$data);

    $query = "INSERT INTO alat VALUES ({$datastring})";
    //var_dump($query);
    $getdata = mysqli_query($conn,$query);
    header("location: masteralat.php");
?>