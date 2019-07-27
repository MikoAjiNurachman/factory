<?php
include '../config/koneksi.php';
$kodesup = $_POST['kodesup'];
$namasup = $_POST['namasup'];
$alamat1 = $_POST['alamat1'];
$alamat2 = $_POST['alamat2'];

$kota = $_POST['kota'];
$kodepos = $_POST['kodepos'];
$pkp = $_POST['pkp'];
$telp = $_POST['telp'];
$hp = $_POST['hp'];
$contactname = $_POST['contactname'];
$email = $_POST['email'];
$kredit = $_POST['kredit'];
$top = $_POST['top'];

//$saldoawal = $_POST['saldoawal'];
//$saldojln = $_POST['saldojln'];
//$jmlbelithn = $_POST['jmlbelithn'];
//$jmlbelithn1 = $_POST['jmlbelithn1'];
//$jmlbelithn2 = $_POST['jmlbelithn2'];
//$jmlbelithn3 = $_POST['jmlbelithn3'];
//$jmlbelithn4 = $_POST['jmlbelithn4'];
//$jmlbelithn5 = $_POST['jmlbelithn5'];
//$tglbeliakhir = $_POST['tglbeliakhir'];

$kduser = $_POST['kduser'];
$tglentry = $_POST['tglentry'];

  $simpan = mysqli_query($koneksi_pcr, "UPDATE apmst SET kodesup = '$kodesup',
                                                                  namasup = '$namasup',
                                                                  alamat1 = '$alamat1',
                                                                  alamat2 = '$alamat2',
                                                                  kota = '$kota',
                                                                  kodepos = '$kodepos',
                                                                  pkp = '$pkp',
                                                                  telp = '$telp',
                                                                  hp = '$hp',
                                                                  contactname = '$contactname',
                                                                  email = '$email',
                                                                  kredit = '$kredit',
                                                                  top = '$top',
                                                                  kodeuser = '$kduser',
                                                                  tglentry = '$tglentry' WHERE kodesup = '$kodesup'") or die(mysqli_error($koneksi_pcr));
  if ($simpan) {
   header("Location:../_ms_supplier.php");
   echo "Berhasil";
   exit();
  }else{
   echo "gagal";
  }
