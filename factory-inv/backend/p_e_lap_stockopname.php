<?php
include '../config/koneksi.php';
$query = "
 UPDATE ms_inmst1 SET ".$_POST["name"]." = '".$_POST["value"]."'
 WHERE kodeitem = '".$_POST["pk"]."'";
mysqli_query($koneksi_inv, $query)or die(mysqli_error($koneksi_inv));
?>
