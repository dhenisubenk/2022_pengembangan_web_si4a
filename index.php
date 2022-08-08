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

        <div class="row mt-3">
            <div class="col-12">
                <div class="alert alert-info">
                    Selamat datang <?= $_SESSION['si4a-user'] ?>
                </div>
                <div class="card">
                    <div class="card-body">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae quis voluptatem rerum maiores ipsam fugiat exercitationem dolore veniam sequi odit deleniti impedit temporibus, voluptatibus eos iure accusamus delectus fuga inventore!
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>