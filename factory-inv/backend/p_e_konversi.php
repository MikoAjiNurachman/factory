<?php
include '../config/koneksi.php';
$nokonter = $_POST['nokonter'];
$satuan = $_POST['satuan'];
$jml = $_POST['jml'];
$satuan2 = $_POST['satuan2'];
$jml2 = $_POST['jml2'];
$kduser = $_POST['kduser'];
$tglentry = $_POST['tglentry'];

#$cek = mysqli_num_rows(mysqli_query($koneksi_inv,"SELECT * FROM ms_konversi WHERE nokonter='$nokonter'"));
#if ($cek > 0){
#echo "<script>window.alert('No Konter sudah digunakan')
#window.location='../_ms_konversi'</script>";
#}else {
  $simpan = mysqli_query($koneksi_inv, "UPDATE ms_konversi SET satuan='$satuan',jml='$jml',satuan2='$satuan2',jml2='$jml2',kduser='$kduser',tglentry='$tglentry' WHERE nokonter = '$nokonter'");
  if ($simpan) {
   header("Location:../_ms_konversi");
   echo "Berhasil";
   exit();
  }else{
   echo "gagal";
  }
#}
?>
