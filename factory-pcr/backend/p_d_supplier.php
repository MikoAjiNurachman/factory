<?php
include "../config/koneksi.php";

//get the value from form update
 $id = $_GET['kodesup']; //get the id_dokter which will deleted


//query for update data in database
$sql = mysqli_query($koneksi_pcr,"DELETE  FROM apmst WHERE `kodesup` = '$id'");
 if ($sql){
   mysqli_query($koneksi_pcr,"DELETE  FROM apmst WHERE `kodesup` = '$id'");

   header("Location:../_ms_supplier.php");
   echo "Berhasil";
   exit();
   }
   else{
     ?>
         <script language=javascript>
       alert('Maaf anda gagal hapus data , Silahkan coba hapus ulang ');
       document. location='../_ms_supplier.php';
     </script>
         <?php
   }
 ?>
