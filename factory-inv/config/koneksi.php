<?php

$db = "factory_utl";
$db2 = "factory_inv";
$db3 = "factory_pcr";
$db4 = "db_toko";
$koneksi_utl = mysqli_connect("localhost","root","",$db); //factory_utl
$koneksi_inv = mysqli_connect("localhost","root","",$db2); //factory_inv
$koneksi_pcr = mysqli_connect("localhost","root","",$db3); //factory_pcr
$koneksi_akun = mysqli_connect("localhost","root","",$db4); //db_toko

// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>
