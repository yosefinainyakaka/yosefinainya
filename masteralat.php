<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Master alat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"></script>
</head>
<body>
    <a class="btn btn-primary mb-2" href="tambahalat.php" role="button">Tambah</a>
    <div class="table-responsive">

        <table class="table table-primary">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Jenis Barang</th>
                <th scope="col">Tanggal Service</Th>
                <th scope="col">Status Service</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        </tbody>
        <?php
            require_once "db.php";

            $query ="SELECT * FROM alat";
            $getdata = mysqli_query($conn,$query);
            $iddata = [];
            $numrows = mysqli_num_rows($getdata);
            if ($numrows > 0) {
                while ($rows = mysqli_fetch_assoc($getdata)) {
                    // var_dump($rows):
                    echo "<tr>
                        <td><a href='editalat.php?id={$rows['id']}'>{$rows['id']}</a></td>
                        <td>{$rows['Nama_Barang']}</td>
                        <td>{$rows['Jenis_Barang']}</td>
                        <td>{$rows['Tanggal_Service']}</td>
                        <td>{$rows['Status_Service']}</td>
                        <td><a class= 'btn btn-danger' href='dodeletealat.php?id={$rows['id']}' role='button'>Delete</a></td>
                    </tr>";
                }
            }
        ?>
        </tbody>
        </table>
    </div>
    
</body>
</html>