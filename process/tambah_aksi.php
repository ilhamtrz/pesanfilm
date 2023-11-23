<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$no = $_POST['no'];
$alamat = $_POST['alamat'];
$namaFilm = $_POST['namaFilm'];
$tiket = $_POST['tiket'];
$totalPembayaran = $_POST['totalPembayaran'];


// menginput data ke database
mysqli_query($koneksi,"INSERT INTO pesanan_film VALUES('','$nama','$no','$alamat','$namaFilm','$tiket','$totalPembayaran')");
 
// mengalihkan halaman kembali ke index.php
header("location:../index.php");
 
?>