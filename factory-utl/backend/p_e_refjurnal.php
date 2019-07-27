<?php
include '../config/koneksi.php';
$kas = $_POST['kas'];
$bank = $_POST['bank'];
$umbeli = $_POST['umbeli'];
$hutang = $_POST['hutang'];
$persediaan = $_POST['persediaan'];
$ppnmasuk = $_POST['ppnmasuk'];
$ongkirbeli = $_POST['ongkirbeli'];
$persediaan_in_transit = $_POST['persediaan_in_transit'];
$persediaan_gd1 = $_POST['persediaan_gd1'];
$persediaan_gd2 = $_POST['persediaan_gd2'];
$persediaan_brg_jadi = $_POST['persediaan_brg_jadi'];
$persediaan_bahan_baku_dlm_proses = $_POST['persediaan_bahan_baku_dlm_proses'];
$persediaan_bahan_pembantu = $_POST['persediaan_bahan_pembantu'];
$biaya_upah_produksi = $_POST['biaya_upah_produksi'];
$biaya_jasa_maklon = $_POST['biaya_jasa_maklon'];
$biaya_biaya_listrik = $_POST['biaya_biaya_listrik'];
$biaya_penyusutan_inv_pabrik = $_POST['biaya_penyusutan_inv_pabrik'];
$biaya_pr_mesin = $_POST['biaya_pr_mesin'];
$biaya_perlengkapan_pabrik = $_POST['biaya_perlengkapan_pabrik'];
$biaya_lain = $_POST['biaya_lain'];
$persediaan_gd3 = $_POST['persediaan_gd3'];
$umjual = $_POST['umjual'];
$piutang = $_POST['piutang'];
$penjualan = $_POST['penjualan'];
$ppnkeluar = $_POST['ppnkeluar'];
$ongkirjual = $_POST['ongkirjual'];
$hpp = $_POST['hpp'];
$retur_penjualan = $_POST['retur_penjualan'];

  $simpan = mysqli_query($koneksi_utl, "UPDATE refjurnal SET
     kas = '$kas',
     bank = '$bank',
     umbeli = '$umbeli',
     hutang = '$hutang',
     persediaan = '$persediaan',
     ppnmasuk = '$ppnmasuk',
     ongkirbeli = '$ongkirbeli',
     persediaan_in_transit = '$persediaan_in_transit',
     persediaan_gd1 = '$persediaan_gd1',
     persediaan_gd2 = '$persediaan_gd2',
     persediaan_brg_jadi = '$persediaan_brg_jadi',
     persediaan_bahan_baku_dlm_proses = '$persediaan_bahan_baku_dlm_proses',
     persediaan_bahan_pembantu = '$persediaan_bahan_pembantu',
     biaya_upah_produksi = '$biaya_upah_produksi',
     biaya_jasa_maklon = '$biaya_jasa_maklon',
     biaya_biaya_listrik = '$biaya_biaya_listrik',
     biaya_penyusutan_inv_pabrik = '$biaya_penyusutan_inv_pabrik',
     biaya_pr_mesin = '$biaya_pr_mesin',
     biaya_perlengkapan_pabrik = '$biaya_perlengkapan_pabrik',
     biaya_lain = '$biaya_lain',
     persediaan_gd3 = '$persediaan_gd3',
     umjual = '$umjual',
     piutang = '$piutang',
     penjualan = '$penjualan',
     ppnkeluar = '$ppnkeluar',
     ongkirjual = '$ongkirjual',
     hpp = '$hpp',
     retur_penjualan = '$retur_penjualan'");
  if ($simpan) {
   header("Location:../_jurnal_referensi.php");
   echo "Berhasil";
   exit();
  }else{
   echo "gagal";
  }
?>
