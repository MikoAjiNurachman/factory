<?php
include "../config/koneksi.php";

//get the value from form update
 $id = $_GET['kd_user']; //get the id_dokter which will deleted

//query for update data in database
$sql = mysqli_query($koneksi_utl,"DELETE  FROM fct_akses WHERE `kd_user` = '$id'")or die (mysqli_error($koneksi_utl));
 //see the result
if ($sql){
?>
        <script language=javascript>
      alert('Data Hak Akses berhasil di Delete');
      document.location='../_hak_akses.php';
    </script>
        <?php
  }
  else{
    ?>
        <script language=javascript>
      alert('Maaf anda gagal menghapus data hak akses.. coba untuk mengulang kembali');
      document.location='../_hak_akses.php';
    </script>
        <?php
  }
?>
