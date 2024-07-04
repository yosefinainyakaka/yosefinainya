<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pelanggan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"></script>
</head>
<body>
    <form action="dotambahpelanggan.php" method="post">
        <div class="row mb-3">
            <label for="Nama_Pelanggan" class="form-label">Nama Pelanggan</label>
            <input type="text" class="form-control" name="Nama_Pelanggan" id="Nama_Pelanggan" aria-describedby="helpid" placeholder="Your Nama_pelanggan"/>
        </div>
        <div class="row mb-3">
             <label for="Email" class="form-label">Email</label>
             <input type="text" class="form-control" name="Email" id="Email" aria-describedby="helpid" placeholder="Your Email"/>
        </div>
        <div class="row mb-3">
             <label for="Tanggal_Lahir" class="form-label">Tanggal Lahir</label>
             <input type="text" class="form-control" name="Tanggal_Lahir" id="Tanggal_Lahir" aria-describedby="helpid" placeholder="Your Tanggal_Lahir"/>
        </div>
        <div class="row mb-3">
            <label for="Nomor_Telepon" class="form-label">Nomor Telpon</label>
            <input type="text" class="form-control" name="Nomor_Telepon" id="Nomor_Telepon" aria-describedby="helpid" placeholder="Your Nomor_Telepon"/>
        </div>
        <div class="row mb-3">
            <label for="Alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" name="Alamat" id="Alamat" aria-describedby="helpid" placeholder="Your Alamat"/>
        </div>

        <button type="submit" class="btn btn-primary">submit</button>
    </form>
    
</body>
</html>