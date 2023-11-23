<?php
session_start();
if (!isset($_SESSION['username'])) {

    header("location:login_page.php");
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicons -->
    <link href="assets/img/pesanfilm-icon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <title>Admin - Home</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.1/examples/cover/">

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="style/cover.css" rel="stylesheet">
</head>

<body class="text-center">

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="masthead mb-auto">
            <div class="inner">
                <h3 class="masthead-brand">Ini adalah beranda</h3>
                <nav class="nav nav-masthead justify-content-center">
                    <a class="nav-link active" href="index.php">Home</a>
                    <a class="nav-link" href="tampil_data.php">Tampil Data</a>
                    <a class="nav-link" href="tambah.php">Tambah Data</a>
                    <a class="nav-link" href="process/logout.php">Logout</a>
                </nav>
            </div>
        </header>

        <main role="main" class="inner cover">
            <h1 class="cover-heading">Home dari Pemesanan Film.</h1>
            <p class="lead">Selamat datang
                <?php

                echo $_SESSION['username'];
                echo "!";
                ?>
                Anda dapat melihat, menambahkan, mengedit dan menghapus pesanan film.</p>
        </main>

        <footer class="mastfoot mt-auto">
            <div class="inner">
                <p>This Application Created by Ilham Triza Kurniawan</p>
            </div>
            <div class="inner">
                <p>Cover template for <a href="https://getbootstrap.com/">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>
            </div>
        </footer>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
</body>

</html>