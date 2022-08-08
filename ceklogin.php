<?php
session_start();
require_once 'config/koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

if (empty($username) || empty($password)) {
    echo "<script>
            alert('Data tidak boleh kosong');
            window.location.href = 'login.php';
    </script>";
} else {
    //cek username
    $cek = mysqli_query($con, "SELECT * FROM user WHERE username = '$username'");
    $jml = mysqli_num_rows($cek);

    if ($jml > 0) {
        # username ada...
        $data = mysqli_fetch_array($cek);
        # cek password
        if (password_verify($password, $data['password'])) {
            # password benar, buat session
            $_SESSION['si4a-user'] = $data['username'];
            echo "<script>
                alert('Login berhasil');
                window.location.href = 'index.php';
            </script>";
        } else {
            # password salah
            echo "<script>
                alert('password salah.');
                window.location.href = 'login.php';
            </script>";
        }
    } else {
        # username tidak ada
        echo "<script>
            alert('Username salah.');
            window.location.href = 'login.php';
        </script>";
    }
}
