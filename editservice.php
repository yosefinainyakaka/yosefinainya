<?php
    require_once "db.php";

    $id = $_GET['id'];
    $query ="SELECT * FROM service_header WHERE id = {$id}";
    $getdata = mysqli_query($conn,$query);
    $data = [];
    $numrows = mysqli_num_rows($getdata);

    if ($numrows > 0) {
        while ($rows = mysqli_fetch_assoc($getdata)) {
            $data = $rows;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah service</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"></script>
</head>
<body>
    <from action="doeditservice.php?id=<?= $data['id'] ?>" method="post">
        <div class="row mb-3">
            <label for="Nama_pelanggan" class="form-label">Nama Pelanggan</label>
            <input type="text" class="form-control" name="nama_pelanggan" id="nama_pelanggan" aria-describedby="helpld" placeholder="Your Nama_Pelanggan" value="<?= $data['Nama_Pelanggan'] ?>"/>
        </div>
        <div class="row mb-3">
            <label for="Total_Estimasi_Harga" class="form-label">Total Estimasi Harga:</label>
            <input type="double" class="form-control" name="Total_Estimasi_Harga" id="Total_Estimasi_Harga" aria-describedby="hepld" placeholder="Your Total_Estimasi_Harga" value="<?= $data['Total_Estimasi_Harga'] ?>"/>
        </div>
        <div class="row mb-3">
            <label for="Total_Harga" class="form-label">Total_Harga</label>
            <input type="double" class="form-control" name="Total_Harga" id="Total_Harga" aria-describedby="helpld" placeholder="Your Total_Harga" value="<?= $data['Total_Harga'] ?>"/>
        </div>
        <div class="row mb-3">
            <label for="Tanggal_Service" class="form-label">Tanggal Service</label>
            <input type="date" class="form-control" name="Tanggal_Service" id="Tanggal_Service" aria-describedby="helpld" placeholder="Your Tanggal_Service" value="<?= $data['Tanggal_Service'] ?>"/>
        </div>
        <div class="row mb-3">
            <label for="Status" class="form-label">Status</label>
            <input type="text" class="form-control" name="Status" id="Status" aria-describedby="helpld" placeholder="Your Status" value="<?= $data['Status'] ?>"/>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>


    </from>
</body>
</html>