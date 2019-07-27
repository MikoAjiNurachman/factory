<?php
include '../config/koneksi.php';
$cekbox = $_POST['cekbox'];
if ($cekbox) {
    foreach ($cekbox as $value) {
      $hapus_banyak = mysqli_query($koneksi_inv,"DELETE FROM `ms_inmst1` WHERE `kodeitem` = '$value'");
      if ($hapus_banyak){
        mysqli_query($koneksi_inv,"DELETE FROM `ms_inmst2` WHERE `kodeitem` = '$value'");
      ?>
              <script language=javascript>
              alert('Data terpilih berhasil di hapus !');
            document.location='../_ms_inventory.php';
          </script>
              <?php
        }
        else{
          ?>
              <script language=javascript>
            alert('Maaf anda gagal hapus data , Silahkan hapus ulang dengan benar');
            document.location='../_ms_inventory.php';
          </script>
              <?php
        }
      }
    }
      ?>
