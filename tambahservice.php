<?php
    require_once "db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah alat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <form action="dotambahservice.php" method="post">
        <div class="row mb-3">
            <label for="Nama_pelanggan" class="form-label">Nama pelanggan</label>
            <select class="form-select form-select-lg" name="Nama_pelanggan" id="Nama_pelanggan">
                <option selected>Select one</option>
                <?php
                    $query ="SELECT * FROM pelanggan";
                    $getdata = mysqli_query($conn,$query);
                    $iddata = [];
                    $numrows = mysqli_num_rows($getdata);
                    if ($numrows > 0) {
                        while ($rows = mysqli_fetch_assoc($getdata)) {
                            // var_dump($rows);
                            echo "<option value={$rows['id']}>{$rows['name']}</option>";
                        }
                    }
                ?>
            </select>
        </div>
        
        <div class="row mb-3">
            <label for="Total_Estimasi_Harga" class="form-label">Total Estimasi Harga</label>
            <input type="number" class="form-control" name="Total_Estimasi_Harga" id="Total_Estimasi_Harga" aria-describedby="helpId" placeholder="Total_Estimasi_Harga"/>
        </div>
        <div class="row mb-3">
            <label for="Total_Harga" class="form-label">Total Harga</label>
            <input type="doubel" class="form-control" name="Total_Harga" id="Total_Harga" aria-describedby="helpId" placeholder="Total_Harga"/>
        </div>
        <div class="row mb-3">
            <label for="Tanggal_service" class="form-label">Tanggal service</label>
            <input type="date" class="form-control" name="Tanggal_service" id="Tanggal_service" aria-describedby="helpId" placeholder="Tanggal_service"/>
        </div>
        <div class="row mb-3">
            <label for="status" class="form-label">status</label>
            <select class="form-select form-select-lg" name="Status" id="Status">
                <option selected>Select one</option>
                <option value="1">Tidak</option>
                <option value="1">Ya</option>
            </select>
        </div>
        

        <button type="submit" class="btn btn-primary">Submit</button>
        
    </form>
</body>
</html>