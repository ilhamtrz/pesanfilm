<?php 
$serverName="localhost";
$userName="root";
$password="";
$databaseName="pwl_crud";
$koneksi = mysqli_connect($serverName,$userName,$password,$databaseName);
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>