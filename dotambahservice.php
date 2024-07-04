<?php
    require_once "db.php";


    $query ="SELECT MAX(ID) AS id FROM service_header";
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
        "Total_Estimasi_Harga" => "'{$_POST['Total_Estimasi_Harga']}'",
        "Total_Harga" => "'{$_POST['Total_Harga']}'",
        "Status" => "'{$_POST['Status']}'",
        "Tanggal_Service" => "STR_TO_DATE(\"{$_POST['Tanggal_Service']}\", \"%Y-%m-%d\")"
    ];
    $datastring = implode(',', $data);

    $query = "INSERT INTO service_header VALUES({$datastring})";
    // var_dump($query);
    $getdata = mysqli_query($conn,$query);
    header("location: listservice.php");
?>