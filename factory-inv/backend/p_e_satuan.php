<?php
include '../config/koneksi.php';
$nokonter = $_POST['nokonter'];
$satuan = $_POST['satuan'];
$kduser = $_POST['kduser'];
$tglentry = $_POST['tglentry'];

$cek = mysqli_num_rows(mysqli_query($koneksi_inv,"SELECT * FROM ms_satuan WHERE satuan='$satuan'"));
if ($cek > 0){
echo "<script>window.alert('Satuan Inventory sudah digunakan')
window.location='../_ms_satuan'</script>";
}else {
  $simpan = mysqli_query($koneksi_inv, "UPDATE ms_satuan SET satuan='$satuan',kduser='$kduser',tglentry='$tglentry' WHERE nokonter = '$nokonter'");
  if ($simpan) {
   header("Location:../_ms_satuan");
   echo "Berhasil";
   exit();
  }else{
   echo "gagal";
  }
}
?>
