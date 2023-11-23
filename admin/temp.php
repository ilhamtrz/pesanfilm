<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Checkout example for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.1/examples/checkout/">
    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

    <div class="container">
        <div class="py-5 text-left">
            <h2>Form Tambah Pesanan Film</h2>
        </div>



        <div class="row">

            <div class="col-md-8 order-md-1">
                <?php
                include 'process/koneksi.php';
                $id = $_GET['id'];
                $data = mysqli_query($koneksi, "select * from pesanan_film where id='$id'");
                while ($d = mysqli_fetch_array($data)) {
                ?>
                    <form class="needs-validation" method="post" action="process/update.php" novalidate>
                        <div class="mb-3">
                            <label for="address">Nama Pemesan</label>
                            <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                            <input type="text" class="form-control" id="nama" value="<?php echo $d['nama_pemesan']; ?>" name="nama" required>
                            <div class="invalid-feedback">
                                Tolong masukkan Nama Pemesan.
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="address">No Telp Pemesan</label>
                            <input type="number" class="form-control" id="no" value="<?php echo $d['nomor_pemesan']; ?>" name="no" required>
                            <div class="invalid-feedback">
                                Tolong masukkan No Telp Pemesan.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="address">Alamat Pemesan</label>
                            <input type="text" class="form-control" id="address" value="<?php echo $d['alamat_pemesan']; ?>" name="alamat" required>
                            <div class="invalid-feedback">
                                Tolong masukkan Alamat Pemesan.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="address">Film yang dipesan</label>
                            <input type="text" class="form-control" id="namaFilm" value="<?php echo $d['nama_film']; ?>" name="namaFilm" required>
                            <div class="invalid-feedback">
                                Tolong masukkan Film yang dipesan.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="address">Jumlah tiket yang dipesan</label>
                            <input type="number" class="form-control" id="tiket" value="<?php echo $d['jumlah_tiket']; ?>" name="tiket" required>
                            <div class="invalid-feedback">
                                Tolong masukkan Film yang dipesan.
                            </div>
                        </div>

                        <hr class="mb-4">
                        <button class="btn btn-primary btn-lg btn-block" type="submit">Simpan Pesanan</button>
                    </form>
                <?php
                }
                ?>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';

            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');

                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
</body>

</html>