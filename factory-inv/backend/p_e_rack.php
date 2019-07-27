<?php
include '../config/koneksi.php';
$nokonter = $_POST['nokonter'];
$kdrak = $_POST['kdrak'];
$kduser = $_POST['kduser'];
$tglentry = $_POST['tglentry'];

$cek = mysqli_num_rows(mysqli_query($koneksi_inv,"SELECT * FROM ms_rack WHERE kdrack='$kdrack'"));
if ($cek > 0){
echo "<script>window.alert('Kode Rack sudah digunakan')
window.location='../_ms_rack'</script>";
}else {
  $simpan = mysqli_query($koneksi_inv, "UPDATE ms_rack SET kdrak='$kdrak',kduser='$kduser',tglentry='$tglentry' WHERE nokonter = '$nokonter'");
  if ($simpan) {
   header("Location:../_ms_rack");
   echo "Berhasil";
   exit();
  }else{
   echo "gagal";
  }
}
?>
