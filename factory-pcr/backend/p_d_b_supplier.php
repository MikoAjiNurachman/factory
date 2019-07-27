<?php
include '../config/koneksi.php';
$cekbox = $_POST['cekbox'];
if ($cekbox) {
    foreach ($cekbox as $value) {
      $hapus_banyak = mysqli_query($koneksi_pcr,"DELETE FROM `apmst` WHERE `kodesup` = '$value'");
      if ($hapus_banyak){
        mysqli_query($koneksi_pcr,"DELETE FROM `apmst` WHERE `kodesup` = '$value'");
      ?>
              <script language=javascript>
              alert('Data terpilih berhasil di hapus !');
            document.location='../_ms_supplier.php';
          </script>
              <?php
        }
        else{
          ?>
              <script language=javascript>
            alert('Maaf anda gagal hapus data , Silahkan hapus ulang dengan benar');
            document.location='../_ms_supplier.php';
          </script>
              <?php
        }
      }
    }
      ?>
