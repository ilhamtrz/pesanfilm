<?php
session_start();
if (!isset($_SESSION['username'])) {

	header("location:login_page.php");
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>Admin - Edit Pesanan Film</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	<!-- Favicons -->
	<link href="assets/img/pesanfilm-icon.png" rel="icon">
	<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Bootstrap core CSS -->
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

	<header>
		<!--Navigation bar-->
		<div id="nav-placeholder">

		</div>

		<script>
			$(function() {
				$("#nav-placeholder").load("navbar.php");
			});
		</script>
		<!--end of Navigation bar-->
	</header>
	<div class="container">
		<div class="py-5 text-left">
			<h2>Form Edit Pesanan Film</h2>
		</div>

		<div class="row">

			<div class="col-md-8 order-md-1">
				<?php
				include 'process/koneksi.php';
				$id = $_GET['id'];
				$data = mysqli_query($koneksi, "SELECT * FROM pesanan_film WHERE id='$id'");
				while ($d = mysqli_fetch_array($data)) {
				?>
					<form class="needs-validation" method="post" action="checkout_edit.php" novalidate>
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

						<div class="mb-3">
							<label for="address">Jumlah yang harus dibayarkan</label>
							<h2>Rp. <span id="totalPembayaran"></span></h2>

						</div>

						<hr class="mb-4">
						<button class="btn btn-secondary btn-lg btn-block" type="submit">Simpan Pesanan</button>
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

	<script>
		// Get the input field and total payment span elements
		var tiketField = document.getElementById("tiket");
		var totalPaymentSpan = document.getElementById("totalPembayaran");

		// Add an event listener to the input field
		tiketField.addEventListener("input", function() {
			// Get the value of the input field
			var tiket = tiketField.value;

			if (tiket > 0) {
				// Calculate the total payment value
				var totalPayment = tiket * 25000;

				// Update the total payment span with the new value
				totalPaymentSpan.innerText = totalPayment;
			} else {
				totalPaymentSpan.innerText = 0;
			}


		});
	</script>
</body>

</html>