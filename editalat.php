<?php
    require_once "db.php";

    $id = $_GET['id'];
    $query ="SELECT * FROM alat WHERE id = {$id}";
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
    <title>Tambah alat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"></script>
</head>
<body>
    <from action="doeditalat.php?id=<?= $data['id'] ?>" method="post">
        <div class="row mb-3">
            <label for="Nama_Barang" class="form-label">Nama Barang</label>
            <input type="text" class="form-control" name="Nama_Barang" id="Nama_Barang" aria-describedby="helpld" placeholder="Your Nama_Barang" value="<?= $data['Nama_Barang'] ?>"/>
        </div>
        <div class="row mb-3">
            <label for="Jenis_Barang" class="form-label">Jenis Barang</label>
            <input type="text" class="form-control" name="Jenis_Barang" id="Jenis_Barang" aria-describedby="hepld" placeholder="Your Jenis_Barang" value="<?= $data['Jenis_Barang'] ?>"/>
        </div>
        <div class="row mb-3">
            <label for="Tanggal_Service" class="form-label">Tanggal Service</label>
            <input type="date" class="form-control" name="Tanggal_Service" id="Tanggal_Service" aria-describedby="helpld" placeholder="Your Tanggal_Service" value="<?= $data['Tanggal_Service'] ?>"/>
        </div>
        <div class="row mb-3">
            <label for="Status_Service" class="form-label">Status Service</label>
            <input type="text" class="form-control" name="Status_Service" id="Status_Service" aria-describedby="helpld" placeholder="Your Status_Service" value="<?= $data['Status_Service'] ?>"/>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>


    </from>
</body>
</html>