<?php
include '../config/koneksi.php';
$kodeitem1 = $_GET['kodeitem1'];
$kodeitem2 = $_GET['kodeitem2'];
$tgl = $_GET['tgl'];

$cek = mysqli_num_rows(mysqli_query($koneksi_inv,"SELECT * FROM opname1 WHERE kodeitem='$kodeitem1' AND '$kodeitem2'"));
if ($cek > 0){
  echo "<script>window.alert('Kode item sudah pernah di stopopname')
  window.location='../_ms_stopopname'</script>";
}else{
$cek = mysqli_query($koneksi_inv,"SELECT * FROM ms_inmst1 WHERE kodeitem BETWEEN '$kodeitem1' AND '$kodeitem2'");
while ($d = mysqli_fetch_array($cek)){
  $kodeitem_inmst1 = $d['kodeitem'];
  $qty = $d['qty'];
  $satuan = $d['satuan'];
  $kdgudang = $d['kdgudang'];
  $kdrak = $d['kdrak'];
  $hpp = $d['hpp'];

  $simpan = mysqli_query($koneksi_inv, "INSERT INTO opname1 VALUES('','$tgl','$kodeitem_inmst1','$qty','$satuan','$kdgudang','$kdrak','$hpp'
                                                                  ,'','','')")
            or die (mysqli_error($koneksi_inv));
}

if ($simpan) {
   header("Location:../_ms_stopopname");
   echo "Berhasil";
   exit();
  }else{
   echo "gagal";
  }
}
?>
