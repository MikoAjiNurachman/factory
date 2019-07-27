<?php
include "../config/koneksi.php";

//get the value from form update
 $id = $_GET['kodeitem']; //get the id_dokter which will deleted


//query for update data in database
$sql = mysqli_query($koneksi_inv,"DELETE  FROM ms_inmst1 WHERE `kodeitem` = '$id'");
 if ($sql){
   mysqli_query($koneksi_inv,"DELETE  FROM ms_inmst2 WHERE `kodeitem` = '$id'");

   header("Location:../_ms_inventory");
   echo "Berhasil";
   exit();
   }
   else{
     ?>
         <script language=javascript>
       alert('Maaf anda gagal hapus data , Silahkan coba hapus ulang ');
       document. location='../_ms_kategori.php';
     </script>
         <?php
   }
 ?>
