<?php
include '../config/koneksi.php';
date_default_timezone_set('Asia/Jakarta');
 $jam = date("H:i:s");
 $status=['status'];
 $waktu=time();
 $hitung_mundur=$waktu-30;//600 detik = 10 Menit
  session_start();
  mysqli_query($koneksi,"UPDATE log_session SET jamout='$jam',
                              status='offline'
  WHERE `username` = '$_SESSION[username]' AND `jamout`='logged' AND `status`='online'");
   if($status=='offline')
      {
  mysqli_query($koneksi,"DELETE FROM log_session WHERE jamin<'$hitung_mundur'");
 }
  session_destroy();
  session_destroy();
  header('location:../index.php');

?>
