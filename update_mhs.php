<?php
require_once 'config/session.php';
require_once 'config/koneksi.php';


$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];

//UPDATE namatable SET kolom = value, ....... WHERE kolom = value;
$save = mysqli_query($con, "UPDATE mahasiswa SET nama = '$nama', jurusan = '$jurusan', alamat = '$alamat' WHERE nim = '$nim'");

if ($save) {
    echo "<script>
            alert('Data berhasil diubah');
            window.location.href = 'index.php';
    </script>";
} else {
    echo "<script>
            alert('Terjadi Kesahalan');
            window.location.href = 'index.php';
    </script>";
}
