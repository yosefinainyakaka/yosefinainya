<?php
    require_once "db.php";

    $id = $_GET['id'];
    $query ="SELECT * FROM pelanggan WHERE id = {$id}";
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
    <title>Tambah Pelanggan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"></script>
</head>
<body>
    <from action="doeditpelanggan.php?id=<?= $data['id'] ?>" method="post">
        <div class="row mb-3">
            <label for="Nama_pelanggan" class="form-label">Nama Pelanggan</label>
            <input type="text" class="form-control" name="nama_pelanggan" id="nama_pelanggan" aria-describedby="helpld" placeholder="Your Nama_Pelanggan" value="<?= $data['Nama_Pelanggan'] ?>"/>
        </div>
        <div class="row mb-3">
            <label for="Email" class="form-label">Email</label>
            <input type="text" class="form-control" name="Email" id="Email" aria-describedby="hepld" placeholder="Your Email" value="<?= $data['Email'] ?>"/>
        </div>
        <div class="row mb-3">
            <label for="Tanggal" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" name="Tanggal" id="Tanggal" aria-describedby="helpld" placeholder="Your Tanggal" value="<?= $data['Tanggal'] ?>"/>
        </div>
        <div class="row mb-3">
            <label for="Nomor_Telepon" class="form-label">Nomor Telepon</label>
            <input type="text" class="form-control" name="Nomor_Telepon" id="Nomor_Telepon" aria-describedby="helpld" placeholder="Your Nomor_Telepon" value="<?= $data['Nomor_Telepon'] ?>"/>
        </div>
        <div class="row mb-3">
            <label for="Alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" name="Alamat" id="Alamat" aria-describedby="helpld" placeholder="Your Alamat" value="<?= $data['Alamat'] ?>"/>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>


    </from>
</body>
</html>