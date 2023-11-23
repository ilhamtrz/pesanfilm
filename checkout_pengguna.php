<?php

?>
<!doctype html>
<html lang="en">

<head>
    <title>Checkout Pesanan - Pengguna</title>
    <meta charset="utf-8">
    <!-- Favicons -->
    <link href="assets/img/pesanfilm-icon.png" rel="icon">
    <link href="assets/img/pesanfilm-icon.png" rel="apple-touch-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>

    <!-- Bootstrap core CSS -->
    <link href="admin/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="admin/style/checkout.css" rel="stylesheet">
</head>

<body>
    <section class="h-100 h-custom" style="background-color: #eee;">

        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-8 col-xl-6">

                    <div class="card border-top border-bottom border-3" style="border-color: #f37a27 !important;">
                        <!-- <input type="button btn-fail" value="Kembali" onclick="history.back()"> -->
                        <div class="card-body p-5">

                            <p class="lead fw-bold" style="color: #f37a27;">Pembayaran Tiket</p>
                            <button class="btn btn-fail" onclick="history.back()">Kembali</button>
                            <form action="process/tambah_aksi.php" method="post">

                                <h6>Identitas Pemesan</h6>
                                <p>Nama: <?php echo $nama; ?></p>
                                <input type="hidden" value="<?php echo $nama; ?>" name="nama">
                                <p>No. Telepon: <?php echo $no; ?></p>
                                <input type="hidden" value="<?php echo $no; ?>" name="no">
                                <p>Alamat: <?php echo $alamat; ?></p>
                                <input type="hidden" value="<?php echo $alamat; ?>" name="alamat">


                                <div class="mx-n5 px-7 py-4" style="background-color: #f2f2f2;">
                                    <div class="row">
                                        <div class="col-md-8 col-lg-9">
                                            <p><?php echo $namaFilm; ?> per Tiket</p>
                                            <input type="hidden" value="<?php echo $namaFilm; ?>" name="namaFilm">
                                        </div>
                                        <div class="col-md-4 col-lg-3">
                                            <p>Rp. 25000</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-lg-9">
                                            <p>Jumlah Tiket</p>
                                        </div>
                                        <div class="col-md-4 col-lg-3">
                                            <p>x <?php echo $tiket; ?></p>
                                            <input type="hidden" value="<?php echo $tiket; ?>" name="tiket">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 col-lg-9">
                                        <p class="lead fw-bold mb-0" style="color: #f37a27;">Total Pembayaran</p>
                                    </div>
                                    <div class="col-md-4 col-lg-3">
                                        <p class="lead fw-bold mb-0" style="color: #f37a27;">Rp.
                                            <?php
                                            $totalPembayaran = $tiket * 25000;
                                            echo $totalPembayaran;
                                            ?>
                                        </p>
                                        <input type="hidden" value="<?php echo $totalPembayaran; ?>" name="totalPembayaran">
                                        </d <div class="row my-4">

                                    </div>

                                    <hr class="mb-4">
                                    <button class="btn btn-secondary btn-lg btn-block" type="submit">Konfirmasi Pesanan</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>