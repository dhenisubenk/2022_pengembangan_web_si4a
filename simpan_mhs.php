<?php

require_once 'config/koneksi.php';


$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];


//INSERT INTO namatable VALUES (....)
//INSERT INTO namatable (kolom, .....) VALUES ()
$save = mysqli_query($con, "INSERT INTO mahasiswa VALUES ('$nim', '$nama', '$jurusan', '$alamat')");

if ($save) {
    echo "<script>
            alert('Data berhasil ditambahkan');
            window.location.href = 'index.php';
    </script>";
} else {
    echo "<script>
            alert('Terjadi Kesahalan');
            window.location.href = 'index.php';
    </script>";
}
