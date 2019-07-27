<?php
include '../config/koneksi.php';
$kodeitem = $_POST['kodeitem'];
$namabrg = $_POST['namabrg'];
$kategori = $_POST['kategori'];

$kdgudang1 = $_POST['kdgudang1'];
$kdgudang2 = $_POST['kdgudang2'];
$kdrak1 = $_POST['kdrak1'];
$kdrak2 = $_POST['kdrak2'];
$satuan1 = $_POST['satuan1'];
$satuan2 = $_POST['satuan2'];

$mip = $_POST['mip'];
$min = $_POST['min'];

$kduser = $_POST['kduser'];
$tglentry = $_POST['tglentry'];

  $cek = mysqli_num_rows(mysqli_query($koneksi_inv,"SELECT * FROM ms_inmst1 WHERE kodeitem='$kodeitem'"));
  if ($cek > 0){
    echo "<script>window.alert('Kode item sudah digunakan')
    window.location='../_ms_inventory'</script>";
}else {
  if ($kdgudang1 == "01") {
    if ($satuan1  != $satuan2 ){

      $beda = mysqli_num_rows(mysqli_query($koneksi_inv,"SELECT * FROM ms_konversi WHERE satuan='$satuan1' AND satuan2 = '$satuan2'"));
      if ($beda > 0){
        mysqli_query($koneksi_inv, "INSERT INTO ms_inmst1 (
              kodecbg,kodeitem,namabrg,kategori,hrg_beli_akhir,tgl_beli_akhir,saldo_awal,jml_saldo_awal,qty,
              satuan,kdgudang,kdrak,hpp,mip,min,po,so,kduser,tglentry
        ) VALUES(
          '','$kodeitem','$namabrg','$kategori','','','','','','$satuan1','$kdgudang1','$kdrak1','','$mip','$min','','','$kduser','$tglentry')") or die (mysqli_error($koneksi_inv));

          mysqli_query($koneksi_inv, "INSERT INTO ms_inmst2 (
                kodecbg,kodeitem,namabrg,kategori,hrg_beli_akhir,tgl_beli_akhir,saldo_awal,jml_saldo_awal,qty,
                satuan,kdgudang,kdrak,hpp,hargalabel,harga_jual1,harga_jual2,harga_jual3,tgl_jual_akhir,
                mip,min,po,so,bln0,frek0,bln1,frek1,bln2,frek2,bln3,frek3,bln4,frek4,kduser,tglentry
          ) VALUES(
            '','$kodeitem','$namabrg','$kategori','','','','','','$satuan2','$kdgudang2','$kdrak2',
            '','','','','','','$mip','$min','','','','','','',
            '','','','','','','$kduser','$tglentry')") or die (mysqli_error($koneksi_inv));

            echo"
                <script language=javascript>
                alert('Berhasil di simpan');
                document.location='../_ms_inventory.php';
                </script>
              ";


      }else {
        echo "<script>
        var tanya = confirm('Konversi belum ada, apakah ingin membuat konversi ?')

        if(tanya === true) {
             window.location='../_ms_konversi.php';
        }else{
            alert('Silahkan ganti satuan konversi!')
            window.history.back();
        }
        </script>";
      }
    }else {
  mysqli_query($koneksi_inv, "INSERT INTO ms_inmst1 (
        kodecbg,kodeitem,namabrg,kategori,hrg_beli_akhir,tgl_beli_akhir,saldo_awal,jml_saldo_awal,qty,
        satuan,kdgudang,kdrak,hpp,mip,min,po,so,kduser,tglentry
  ) VALUES(
    '','$kodeitem','$namabrg','$kategori','','','','','','$satuan1','$kdgudang1','$kdrak1','','$mip','$min','','','$kduser','$tglentry')") or die (mysqli_error($koneksi_inv));

    mysqli_query($koneksi_inv, "INSERT INTO ms_inmst2 (
          kodecbg,kodeitem,namabrg,kategori,hrg_beli_akhir,tgl_beli_akhir,saldo_awal,jml_saldo_awal,qty,
          satuan,kdgudang,kdrak,hpp,hargalabel,harga_jual1,harga_jual2,harga_jual3,tgl_jual_akhir,
          mip,min,po,so,bln0,frek0,bln1,frek1,bln2,frek2,bln3,frek3,bln4,frek4,kduser,tglentry
    ) VALUES(
      '','$kodeitem','$namabrg','$kategori','','','','','','$satuan2','$kdgudang2','$kdrak2',
      '','','','','','','$mip','$min','','','','','','',
      '','','','','','','$kduser','$tglentry')") or die (mysqli_error($koneksi_inv));

      echo"
          <script language=javascript>
          alert('Berhasil di simpan');
          document.location='../_ms_inventory.php';
          </script>
        ";

  }
}
}




?>
