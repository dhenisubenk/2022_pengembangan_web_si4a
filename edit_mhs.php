<?php
require_once 'config/session.php';
require_once 'config/koneksi.php';

$nim = $_GET['nim'];
$sql = mysqli_query($con, "SELECT * FROM mahasiswa WHERE nim = '$nim'");
$row = mysqli_fetch_array($sql);
//var_dump($row);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body {
            background-color: #eee;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row mt-5">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">
                        Edit Data Mahasiswa
                    </div>
                    <div class="card-body">
                        <form action="update_mhs.php" method="POST">
                            <div class="mb-2">
                                <label for="" class="form-label">NIM</label>
                                <input type="text" class="form-control" name="nim" value="<?= $row['nim'] ?>" readonly>
                            </div>
                            <div class="mb-2">
                                <label for="" class="form-label">Nama</label>
                                <input type="text" class="form-control" name="nama" value="<?= $row['nama'] ?>">
                            </div>
                            <div class="mb-2">
                                <label for="" class="form-label">Jurusan</label>
                                <select name="jurusan" class="form-select" id="">
                                    <option><?= $row['jurusan'] ?></option>
                                    <option>Sistem Informasi</option>
                                    <option>Teknik Informatika</option>
                                    <option>Manajemen Informatika</option>
                                    <option>Komputerisasi Akuntansi</option>
                                </select>
                            </div>
                            <div class="mb-2">
                                <label for="" class="form-label">Alamat</label>
                                <input type="text" class="form-control" name="alamat" value="<?= $row['alamat'] ?>">
                            </div>
                            <div class="mb-2">
                                <a href="index.php" class="btn btn-secondary">Back</a>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>