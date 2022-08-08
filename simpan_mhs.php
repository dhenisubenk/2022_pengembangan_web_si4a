<?php
require_once 'config/session.php';
require_once 'config/koneksi.php';
//SESSION

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];

//files
$file_name = $_FILES['foto']['name'];       //gambar.PNG
$file_tmp = $_FILES['foto']['tmp_name'];
$file_size = $_FILES['foto']['size'];
$file_type = $_FILES['foto']['type'];

//get tipe
$step1 = strtolower($file_name); //gambar.png
$step2 = explode(".", $step1);  // ['gambar', 'png']
$tipe = end($step2); //png

//image/png 

//if ($file_type != "image/png")
if ($tipe != "png" && $tipe != "jpg" && $tipe != "jpeg") {
    echo "<script>
            alert('File Tidak Support');
            window.location.href = 'index.php';
    </script>";
} elseif ($file_size > 2000000) {
    echo "<script>
            alert('File Tidak boleh > dari 2MB');
            window.location.href = 'index.php';
    </script>";
} else {
    //INSERT INTO namatable VALUES (....)
    //INSERT INTO namatable (kolom, .....) VALUES ()
    $save = mysqli_query($con, "INSERT INTO mahasiswa VALUES ('$nim', '$nama', '$jurusan', '$alamat', '$file_name')");

    if ($save) {
        move_uploaded_file($file_tmp, "img/" . $file_name);
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
}
