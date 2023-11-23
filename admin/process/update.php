<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$no = $_POST['no'];
$alamat = $_POST['alamat'];
$namaFilm = $_POST['namaFilm'];
$tiket = $_POST['tiket'];
$totalPembayaran = $_POST['totalPembayaran'];
 
// update data ke database
mysqli_query($koneksi,"UPDATE pesanan_film SET nama_pemesan='$nama', nomor_pemesan='$no', alamat_pemesan='$alamat', nama_film='$namaFilm', jumlah_tiket='$tiket',total_pembayaran='$totalPembayaran' WHERE id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:../tampil_data.php");
 
?>