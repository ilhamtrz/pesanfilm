<?php
session_start();
if (!isset($_SESSION['username'])) {

	header("location:login_page.php");
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>Admin - Tampil Pesanan</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	<!-- Favicons -->
	<link href="assets/img/pesanfilm-icon.png" rel="icon">
	<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Bootstrap core CSS -->
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="style/tampil_data.css" rel="stylesheet">
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
	<h2 class="mt-5">Data Pemesanan Film</h2>
	<br />
	<div class="tabel">
		<table class="table">
			<thead class="thead-dark">
				<tr>
					<th scope="col">NO</th>
					<th scope="col">Nama Pemesan</th>
					<th scope="col">Nomor Telepon Pemesan</th>
					<th scope="col">Alamat Pemesan</th>
					<th scope="col">Film yang dipesan</th>
					<th scope="col">Jumlah tiket yang dipesan</th>
					<th scope="col">Total Pembayaran</th>
					<th scope="col">AKSI</th>
				</tr>
			</thead>
			<tbody>
				<?php
				include 'process/koneksi.php';
				$no = 1;
				$data = mysqli_query($koneksi, "SELECT * FROM pesanan_film");
				while ($d = mysqli_fetch_array($data)) {
				?>
					<tr>
						<th scope="row"><?php echo $no++; ?></td>
						<td><?php echo $d['nama_pemesan']; ?></td>
						<td><?php echo $d['nomor_pemesan']; ?></td>
						<td><?php echo $d['alamat_pemesan']; ?></td>
						<td><?php echo $d['nama_film']; ?></td>
						<td><?php echo $d['jumlah_tiket']; ?></td>
						<td>Rp. <?php echo $d['total_pembayaran']; ?></td>
						<td>
							<a href="edit.php?id=<?php echo $d['id']; ?>" type="button" class="btn btn-primary">EDIT</a>
							<a href="process/hapus.php?id=<?php echo $d['id']; ?>" type="button" class="btn btn-primary">HAPUS</a>
						</td>
					</tr>
				<?php
				}
				?>
			</tbody>
		</table>
	</div>
</body>

</html>