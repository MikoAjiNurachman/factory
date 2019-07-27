<?php
include 'config/koneksi.php';
  session_start();
$kodeitem1 = $_POST['hidden_kodeitem1'];
$kodeitem2 = $_POST['hidden_kodeitem2'];

$tglin = $_POST['hidden_tglin'];
$kodein = $_POST['hidden_kodein'];

$konterin = $_POST['hidden_konterin'] + 1;

$userid = $_SESSION['username'];
$date = date("Y-m-d");

$query = mysqli_query($koneksi_inv,"SELECT u.kodeitem, u.qty, u.satuan, u.qtyopname, u.qtyselisih, u.hpp, a.kodeitem, a.namabrg FROM opname1 AS u
                                    INNER JOIN ms_inmst1 AS a ON u.kodeitem = a.kodeitem WHERE a.kodeitem BETWEEN '$kodeitem1' AND '$kodeitem2' ")or die(mysqli_error($koneksi_inv));

while ($d = mysqli_fetch_array($query)) {


$simpan = mysqli_query($koneksi_inv, "INSERT INTO intrn1 VALUES('','$kodein','$tglin','$d[kodeitem]','$d[qty]','$d[satuan]','','','','','','','$userid','$date')");

          $qty = $d['qty'];
          $qtyselisih= $d['qtyselisih'];
          $update_selisih = $qty + $qtyselisih;
          mysqli_query($koneksi_inv, "UPDATE ms_inmst1 SET qty='$update_selisih' WHERE kodeitem = '$d[kodeitem]'");
}
if ($simpan) {
  mysqli_query($koneksi_inv,"DELETE  FROM opname1 WHERE `kodeitem` BETWEEN $kodeitem1 AND $kodeitem2 ");
//insert.php

$connect = new PDO("mysql:host=localhost;dbname=factory_inv", "root", "");

$query = "
INSERT INTO trjurnal
(kodeakun,namaakun,debet, kredit)
VALUES (:kodeakun, :namaakun, :debet, :kredit)
";

for($count = 0; $count<count($_POST['hidden_kodeakun']); $count++)
{
 $data = array(
   ':kodeakun' => $_POST['hidden_kodeakun'][$count],
   ':namaakun' => $_POST['hidden_namaakun'][$count],
   ':debet' => $_POST['hidden_debet'][$count],
   ':kredit' => $_POST['hidden_kredit'][$count]
 );
 $statement = $connect->prepare($query);
 $statement->execute($data);
}
  mysqli_query($koneksi_utl, "UPDATE konter SET konterin='$konterin'");
}
?>
