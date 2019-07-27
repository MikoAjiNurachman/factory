<?php
include '../config/koneksi.php';
$kategori = $_POST['kategori'];
$ket = $_POST['ket'];
$kduser = $_POST['kduser'];
$tglentry = $_POST['tglentry'];

$cek = mysqli_num_rows(mysqli_query($koneksi_inv,"SELECT * FROM ms_kategori WHERE kategori='$kategori' or ket='$ket'"));
if ($cek > 0){
echo "<script>window.alert('Kode Kategori / Ket Kategori sudah digunakan')
window.location='../_ms_kategori'</script>";
}else {
  $simpan = mysqli_query($koneksi_inv, "INSERT INTO ms_kategori VALUES('$kategori','$ket','$kduser','$tglentry')");
  if ($simpan) {
   header("Location:../_ms_kategori");
   echo "Berhasil";
   exit();
  }else{
   echo "gagal";
  }
}
?>
