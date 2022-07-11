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
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header text-center">
                        Form Nilai
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="mb-2">
                                <label for="" class="form-label">Nama</label>
                                <input type="text" class="form-control" name="nama">
                            </div>
                            <div class="mb-2">
                                <label for="" class="form-label">UTS (30%)</label>
                                <input type="text" class="form-control" name="uts">
                            </div>
                            <div class="mb-2">
                                <label for="" class="form-label">UAS (30%)</label>
                                <input type="text" class="form-control" name="uas">
                            </div>
                            <div class="mb-2">
                                <label for="" class="form-label">Tugas (40%)</label>
                                <input type="text" class="form-control" name="tugas">
                            </div>
                            <div class="mb-2">
                                <button type="submit" name="cetak" class="btn btn-primary">Cetak</button>
                            </div>
                        </form>

                        <?php
                        // isset -> var sudah di set / belum
                        // empty -> var kosong / tidak
                        if (isset($_POST['cetak'])) {
                            # code...
                            $nama = $_POST['nama'];
                            $uts = $_POST['uts'];
                            $uas = $_POST['uas'];
                            $tugas = $_POST['tugas'];
                            $nilai = 0.3 * $uts + 0.3 * $uas + 0.4 * $tugas;

                            echo "Halo $nama, Nilai Anda $nilai";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>