<?php
include '../config/koneksi.php';
$kodeitem = $_POST['kodeitem'];
$namabrg = $_POST['namabrg'];
$kategori1 = $_POST['kategori1'];
$kategori2 = $_POST['kategori2'];

$kdgudang1 = $_POST['kdgudang1'];
$kdgudang2 = $_POST['kdgudang2'];
$kdrak1 = $_POST['kdrak1'];
$kdrak2 = $_POST['kdrak2'];
$satuan1 = $_POST['satuan1'];
$satuan2 = $_POST['satuan2'];

$mip1 = $_POST['mip1'];
$min1 = $_POST['min1'];
$mip2 = $_POST['mip2'];
$min2 = $_POST['min2'];

$kduser = $_POST['kduser'];
$tglentry = $_POST['tglentry'];


  if ($kdgudang1 == "01") {
    if ($satuan1  != $satuan2 ){

      $beda = mysqli_num_rows(mysqli_query($koneksi_inv,"SELECT * FROM ms_konversi WHERE satuan='$satuan1' AND satuan2 = '$satuan2'"));
      if ($beda > 0){
      $simpan =  mysqli_query($koneksi_inv, "UPDATE ms_inmst1 SET
              kodecbg = '',
              kodeitem = '$kodeitem',
              namabrg = '$namabrg',
              kategori = '$kategori1',
              hrg_beli_akhir = '',
              tgl_beli_akhir = '',
              saldo_awal = '',
              jml_saldo_awal = '',
              qty = '',
              satuan = '$satuan1',
              kdgudang = '$kdgudang1',
              kdrak = '$kdrak1',
              hpp = '',
              mip = '$mip1',
              min = '$min1',
              po = '',
              so = '',
              kduser = '$kduser',
              tglentry = '$tglentry' WHERE kodeitem = '$kodeitem'");

              if ($simpan) {
                mysqli_query($koneksi_inv, "UPDATE ms_inmst2 SET
                      kodecbg = '',
                      kodeitem = '$kodeitem',
                      namabrg = '$namabrg',
                      kategori = '$kategori2',
                      hrg_beli_akhir = '',
                      tgl_beli_akhir = '',
                      saldo_awal = '',
                      jml_saldo_awal = '',
                      qty = '',
                      satuan = '$satuan2',
                      kdgudang = '$kdgudang2',
                      kdrak = '$kdrak2',
                      hpp = '',
                      hargalabel = '',
                      harga_jual1 = '',
                      harga_jual2 = '',
                      harga_jual3 = '',
                      tgl_jual_akhir = '',
                      mip = '$mip2',
                      min = '$min2',
                      po = '',
                      so = '',
                      bln0 = '', frek0 = '', bln1 = '', frek1 = '', bln2 = '', frek2 = '', bln3 = '', frek3 = '', bln4 = '', frek4 = '',
                      kduser = '$kduser',
                      tglentry = '$tglentry' WHERE kodeitem = '$kodeitem'") or die (mysqli_error($koneksi_inv));
                      echo"
                          <script language=javascript>
                          alert('Berhasil di edit');
                          document.location='../_ms_inventory.php';
                          </script>
                        ";
              }



      }else {
        echo "<script>
        var tanya = confirm('Gagal edit, Konversi belum ada, apakah ingin membuat konversi ?')

        if(tanya === true) {
             window.location='../_ms_konversi.php';
        }else{
            alert('Silahkan ganti satuan konversi!')
            window.history.back();
        }
        </script>";
      }
    }else {
      $simpan2 =  mysqli_query($koneksi_inv, "UPDATE ms_inmst1 SET
              kodecbg = '',
              kodeitem = '$kodeitem',
              namabrg = '$namabrg',
              kategori = '$kategori1',
              hrg_beli_akhir = '',
              tgl_beli_akhir = '',
              saldo_awal = '',
              jml_saldo_awal = '',
              qty = '',
              satuan = '$satuan1',
              kdgudang = '$kdgudang1',
              kdrak = '$kdrak1',
              hpp = '',
              mip = '$mip1',
              min = '$min1',
              po = '',
              so = '',
              kduser = '$kduser',
              tglentry = '$tglentry' WHERE kodeitem = '$kodeitem'");

              if ($simpan2) {
                mysqli_query($koneksi_inv, "UPDATE ms_inmst2 SET
                      kodecbg = '',
                      kodeitem = '$kodeitem',
                      namabrg = '$namabrg',
                      kategori = '$kategori2',
                      hrg_beli_akhir = '',
                      tgl_beli_akhir = '',
                      saldo_awal = '',
                      jml_saldo_awal = '',
                      qty = '',
                      satuan = '$satuan2',
                      kdgudang = '$kdgudang2',
                      kdrak = '$kdrak2',
                      hpp = '',
                      hargalabel = '',
                      harga_jual1 = '',
                      harga_jual2 = '',
                      harga_jual3 = '',
                      tgl_jual_akhir = '',
                      mip = '$mip2',
                      min = '$min2',
                      po = '',
                      so = '',
                      bln0 = '', frek0 = '', bln1 = '', frek1 = '', bln2 = '', frek2 = '', bln3 = '', frek3 = '', bln4 = '', frek4 = '',
                      kduser = '$kduser',
                      tglentry = '$tglentry' WHERE kodeitem = '$kodeitem'") or die (mysqli_error($koneksi_inv));
                      echo"
                          <script language=javascript>
                          alert('Berhasil di edit');
                          document.location='../_ms_inventory.php';
                          </script>
                        ";
              }

  }
}





?>
