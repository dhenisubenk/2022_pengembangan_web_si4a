<?php
require_once 'config/session.php';
require_once 'config/koneksi.php';
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
        <?php require_once 'config/menu.php'; ?>

        <div class="row mt-5">
            <div class="col-md-12">
                <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#formMahasiswa">
                    Tambah Mahasiswa
                </button>
                <div class="card">

                    <div class="card-header text-center">
                        Data Mahasiswa
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>#</th>
                                    <th>NIM</th>
                                    <th>NAMA</th>
                                    <th>JURUSAN</th>
                                    <th>ALAMAT</th>
                                    <th>AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // delete from namatable where field = value;
                                $sql = mysqli_query($con, "SELECT * FROM mahasiswa");
                                $no = 1;
                                while ($row = mysqli_fetch_array($sql)) {
                                    echo "<tr>
                                        <td>$no</td>
                                        <td><img src='img/$row[foto]' width='50'></td>
                                        <td>$row[nim]</td>
                                        <td>$row[nama]</td>
                                        <td>$row[jurusan]</td>
                                        <td>$row[alamat]</td>
                                        <td>
                                            <a href='edit_mhs.php?nim=$row[nim]' class='btn btn-sm btn-warning'>Edit</a>
                                            <a href='delete_mhs.php?nim=$row[nim]' class='btn btn-sm btn-danger' onclick=\"return confirm('Hapus Data?')\">Hapus</a>
                                        </td>
                                    </tr>";

                                    $no++;
                                }
                                ?>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="formMahasiswa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Mahasiswa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="simpan_mhs.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-2">
                            <label for="" class="form-label">NIM</label>
                            <input type="text" class="form-control" name="nim">
                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">Nama</label>
                            <input type="text" class="form-control" name="nama">
                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">Jurusan</label>
                            <select name="jurusan" class="form-select" id="">
                                <option>Sistem Informasi</option>
                                <option>Teknik Informatika</option>
                                <option>Manajemen Informatika</option>
                                <option>Komputerisasi Akuntansi</option>
                            </select>
                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">Alamat</label>
                            <input type="text" class="form-control" name="alamat">
                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">Foto</label>
                            <input type="file" class="form-control" name="foto">
                        </div>
                        <div class="mb-2">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>