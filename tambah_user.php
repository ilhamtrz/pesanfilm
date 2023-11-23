
<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>

	<title>TAMBAH PESANAN FILM</title>

	<link rel="canonical" href="https://getbootstrap.com/docs/4.1/examples/checkout/">
	<!-- Bootstrap core CSS -->
	<link href="admin/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<meta content="" name="description">
	<meta content="" name="keywords">

	<!-- Favicons -->
	<link href="assets/img/pesanfilm-icon.png" rel="icon">
	<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="assets/vendor/aos/aos.css" rel="stylesheet">
	<link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
	<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

	<!-- Variables CSS Files. Uncomment your preferred color scheme -->
	<link href="assets/css/variables.css" rel="stylesheet">
	<!-- <link href="assets/css/variables-blue.css" rel="stylesheet"> -->
	<!-- <link href="assets/css/variables-green.css" rel="stylesheet"> -->
	<!-- <link href="assets/css/variables-orange.css" rel="stylesheet"> -->
	<!-- <link href="assets/css/variables-purple.css" rel="stylesheet"> -->
	<!-- <link href="assets/css/variables-red.css" rel="stylesheet"> -->
	<!-- <link href="assets/css/variables-pink.css" rel="stylesheet"> -->

	<!-- Template Main CSS File -->
	<link href="assets/css/tambah.css" rel="stylesheet">


</head>

<body class="bg-light">
	<!-- ======= Header ======= -->
	<header id="header" class="header fixed-top" data-scrollto-offset="0">
		<div class="container-fluid d-flex align-items-center justify-content-between">

			<a href="index.php" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
				<!-- Uncomment the line below if you also wish to use an image logo -->
				<!-- <img src="assets/img/logo.png" alt=""> -->
				<h1>PesanFilm<span>.</span></h1>
			</a>

			<nav id="navbar" class="navbar">
				<ul>


					<li><a href="index.php">Home</a></li>

					<li><a class="nav-link scrollto" href="index.php#services">Layanan</a></li>
					<li><a class="nav-link scrollto" href="index.php#testimonials">Testimoni</a></li>
					<li><a class="nav-link scrollto" href="index.php#pricing">Harga</a></li>
					<li><a class="nav-link scrollto" href="index.php#daftarFilm">Daftar Film</a></li>
					<li><a class="nav-link scrollto" href="index.php#team">Team</a></li>
					<li><a href="blog.php">Blog</a></li>
					<li class="dropdown"><a href="#"><span>Admin</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
						<ul>
							<li><a href="admin/index.php">Home</a></li>
							<li class="dropdown"><a href="admin/index.php"><span>Menu</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
								<ul>
									<li><a href="admin/tampil_data.php">Tampil Pesanan</a></li>
									<li><a href="admin/tambah.php">Tambah Pesanan</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li><a class="nav-link scrollto" href="index.php#contact">Contact</a></li>
				</ul>
				<i class="bi bi-list mobile-nav-toggle d-none"></i>
			</nav><!-- .navbar -->

		</div>
	</header><!-- End Header -->

	<div class="container">
		<div class="pb-2 mt-5 text-left">
			<h2>Form Tambah Pesanan Film</h2>
		</div>

		<div class="row">

			<div class="col-md-8 order-md-1">
				<p>*Harga 1 tiket film adalah Rp. 25000</p>

				<form class="needs-validation" method="post" action="checkout_pengguna.php" novalidate>
					<div class="mb-3">
						<label for="address">Nama Pemesan</label>
						<input type="text" class="form-control" id="nama" placeholder="John Doe" name="nama" required>
						<div class="invalid-feedback">
							Tolong masukkan Nama Pemesan.
						</div>
					</div>
					<div class="mb-3">
						<label for="address">No Telp Pemesan</label>
						<input type="number" class="form-control" id="no" placeholder="08xxxxxxxxx" name="no" required>
						<div class="invalid-feedback">
							Tolong masukkan No Telp Pemesan.
						</div>
					</div>

					<div class="mb-3">
						<label for="address">Alamat Pemesan</label>
						<input type="text" class="form-control" id="address" placeholder="Nama Jalan" name="alamat" required>
						<div class="invalid-feedback">
							Tolong masukkan Alamat Pemesan.
						</div>
					</div>

					<div class="mb-3">
						<label for="address">Film yang dipesan</label>
						<input type="text" class="form-control" id="namaFilm" placeholder="Judul Film" name="namaFilm" required>
						<div class="invalid-feedback">
							Tolong masukkan Film yang dipesan.
						</div>
					</div>

					<div class="mb-3">
						<label for="address">Jumlah tiket yang dipesan</label>
						<input type="number" class="form-control" id="tiket" placeholder="0" name="tiket" required>
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