<?php
session_start();
if (empty($_SESSION['si4a-user'])) {
    echo "<script>
                alert('Anda belum login');
                window.location.href = 'login.php';
            </script>";
    exit();
} else {
    $user = $_SESSION['si4a-user'];
}
