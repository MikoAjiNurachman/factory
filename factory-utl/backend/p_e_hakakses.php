<?php
include '../config/koneksi.php';

$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];
$password_md5=md5($password);


$update = mysqli_query($koneksi,"UPDATE tbl_aksess SET username='$username',password='$password_md5' WHERE `id` = '$id'")
or die (mysqli_error($koneksi));

if ($update){
?>
        <script language=javascript>
      document. location='../_hak_akses.php';
    </script>
        <?php
  }
  else{
    ?>
        <script language=javascript>
      alert('Maaf anda gagal merubah data pasien, Silahkan isi data diri anda dengan benar');
      document. location='../_edit_hak_akses.php';
    </script>
        <?php
  }
?>
