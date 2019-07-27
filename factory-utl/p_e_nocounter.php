<?php
include '../config/koneksi.php';
$query = "
 UPDATE konter SET ".$_POST["name"]." = '".$_POST["value"]."'
 WHERE kodecbg = '".$_POST["pk"]."'";
mysqli_query($koneksi_utl, $query)or die(mysqli_error($koneksi_utl));
?>
