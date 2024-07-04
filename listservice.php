<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
<a class="btn btn-primary mb-2" href="tambahservice.php" role="button">Tambah</a>
    
    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama Pelanggan</th>
                    <th scope="col">Total Estimasi Harga</th>
                    <th scope="col">Total Harga</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
            <?php
                require_once "db.php";

                $query ="SELECT * FROM service_header";
                $getdata = mysqli_query($conn,$query);
                $iddata = [];
                $numrows = mysqli_num_rows($getdata);
                if ($numrows > 0) {
                    while ($rows = mysqli_fetch_assoc($getdata)) {
                        $status_text = "tidak";
                        if($rows['Status'] == 1) {
                            $status_text = "ya";
                        }
                        echo "<tr>
                            <td><a href='editservice.php?id={$rows['id']}'>{$rows['id']}</a></td>
                            <td>{$rows['Nama_Pelanggan']}</td>
                            <td>{$rows['Total_Estimasi_Harga']}</td>
                            <td>{$rows['Total_Harga']}</td>
                            <td>{$status_text}</td>
                            <td><a class='btn btn-danger' href='dodeleteservice.php?id={$rows['id']}' role='button'>Delete</a></td>
                        </tr>";
                    }
                }
            ?>
            </tbody>
        </table>
    </div>
</body>
</html>