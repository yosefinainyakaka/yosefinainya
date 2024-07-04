<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Master Pelanggan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"></script>
</head>
<body>
    <a class="btn btn-primary mb-2" href="tambahpelanggan.php" role="button">Tambah</a>
    <div class="table-responsive">

        <table class="table table-primary">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">No.Telp</Th>
                <th scope="col">Alamat</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        </tbody>
        <?php
            require_once "db.php";

            $query ="SELECT * FROM pelanggan";
            $getdata = mysqli_query($conn,$query);
            $iddata = [];
            $numrows = mysqli_num_rows($getdata);
            if ($numrows > 0) {
                while ($rows = mysqli_fetch_assoc($getdata)) {
                    // var_dump($rows):
                    echo "<tr>
                        <td><a href='editpelanggan.php?id={$rows['id']}'>{$rows['id']}</a></td>
                        <td>{$rows['Nama_Pelanggan']}</td>
                        <td>{$rows['Email']}</td>
                        <td>{$rows['Nomor_Telepon']}</td>
                        <td>{$rows['Alamat']}</td>
                        <td>{$rows['Tanggal']}</td>
                        <td><a class= 'btn btn-danger' href='dodeletepelanggan.php?id={$rows['id']}' role='button'>Delete</a></td>
                    </tr>";
                }
            }
        ?>
        </tbody>
        </table>
    </div>
    
</body>
</html>