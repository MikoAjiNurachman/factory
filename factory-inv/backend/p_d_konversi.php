<?php
include "../config/koneksi.php";

//get the value from form update
 $id = $_GET['nokonter']; //get the id_dokter which will deleted


//query for update data in database
$sql = mysqli_query($koneksi_inv,"DELETE  FROM ms_konversi WHERE `nokonter` = '$id'");
 if ($sql){
   header("Location:../_ms_konversi");
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
