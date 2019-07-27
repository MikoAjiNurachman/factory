<?php
include '../config/koneksi.php';
$kdrak = $_POST['kdrak'];
$kduser = $_POST['kduser'];
$tglentry = $_POST['tglentry'];

$cek = mysqli_num_rows(mysqli_query($koneksi_inv,"SELECT * FROM ms_rack WHERE kdrak='$kdrak'"));
if ($cek > 0){
echo "<script>window.alert('Kode Rack sudah digunakan')
window.location='../_ms_rack'</script>";
}else {
  $simpan = mysqli_query($koneksi_inv, "INSERT INTO ms_rack VALUES('','$kdrak','$kduser','$tglentry')");
  if ($simpan) {
   header("Location:../_ms_rack");
   echo "Berhasil";
   exit();
  }else{
   echo "gagal";
  }
}
?>
