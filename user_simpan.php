<?php
require_once 'config/session.php';
require_once 'config/koneksi.php';
//SESSION

$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];
$pass = password_hash($password, PASSWORD_DEFAULT);

//if ($file_type != "image/png")
if (empty($username) || empty($password) || empty($role)) {
    echo "<script>
            alert('Data tidak boleh kosong');
            window.location.href = 'user.php';
    </script>";
} else {
    //INSERT INTO namatable VALUES (....)
    //INSERT INTO namatable (kolom, .....) VALUES ()
    $save = mysqli_query($con, "INSERT INTO user (username, password, role) VALUES ('$username', '$pass', '$role')");

    if ($save) {
        echo "<script>
                alert('Data berhasil ditambahkan');
                window.location.href = 'user.php';
        </script>";
    } else {
        echo "<script>
                alert('Terjadi Kesahalan');
                window.location.href = 'user.php';
        </script>";
    }
}
