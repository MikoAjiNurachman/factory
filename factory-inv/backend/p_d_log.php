<?php
include '../config/koneksi.php';
 $jam = date("H:i:s");
 $waktu=time();
 $hitung_mundur=$waktu-30;//600 detik = 10 Menit
  session_start();
  mysqli_query($koneksi,"UPDATE log_session SET jamout='$jam',
                              status='offline'
  WHERE `username` = '$_SESSION[username]' AND `jamout`='logged' AND `status`='online'");

  mysqli_query($koneksi,"DELETE FROM log_session WHERE `status`='offline'");

  session_destroy();
  header('location:../index.php');
?>
