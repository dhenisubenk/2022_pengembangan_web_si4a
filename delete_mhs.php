<?php
require_once 'config/session.php';
require_once 'config/koneksi.php';

$nim = $_GET['nim'];
$delete = mysqli_query($con, "DELETE FROM mahasiswa WHERE nim = '$nim'");

if ($delete) {
    echo "<script>
            alert('Data berhasil dihapus');
            window.location.href = 'index.php';
    </script>";
} else {
    echo "<script>
            alert('Terjadi Kesahalan');
            window.location.href = 'index.php';
    </script>";
}
