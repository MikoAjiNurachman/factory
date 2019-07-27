<!DOCTYPE html>

<?php include 'config/head.php'; ?>
<script src="editable/js/jquery-2.0.3.min.js"></script>
<script src="editable/js/bootstrap.min.js"></script>
<link href="editable/css/bootstrap-editable.css" rel="stylesheet">
<script src="editable/js/bootstrap-editable.js"></script>
<?php
include "config/koneksi.php";
$query = mysqli_query($koneksi_utl,"SELECT * FROM profile");
while ($dataTampil = mysqli_fetch_array($query)) {
  ?>
  <title><?php echo $dataTampil[1];?> - Jurnal Referensi</title>

<?php }
include 'config/koneksi.php';
session_start();
if (empty($_SESSION['username']))

                {
					echo"
             <script language=javascript>
			alert('Anda Tidak Dapat Mengakses.. Siahkan untuk Login Terlebih Dahulu');
			document.location='index.php';
			</script>";

                }
else if($_SESSION['username'] = $_SESSION['username']) {
?>

<body class="hold-transition skin-purple sidebar-mini">
<?php include 'config/aside.php'; ?>
<?php
include "config/koneksi.php";
$query = mysqli_query($koneksi_utl,"SELECT * FROM profile");
while ($dataTampil = mysqli_fetch_array($query)) {
  ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
         Jurnal Referensi
        <small><?php echo $dataTampil[1];?></small>
      </h1>
<?php } ?>
       <ol class="breadcrumb">
       					<i><script type='text/javascript'>
					var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
					var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
					var date = new Date();
					var day = date.getDate();
					var month = date.getMonth();
					var thisDay = date.getDay(),
						thisDay = myDays[thisDay];
					var yy = date.getYear();
					var year = (yy < 1000) ? yy + 1900 : yy;
					document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
					</script>
					</i>
      </ol>
	  	  <br>

    </section>

        <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Form Jurnal Referensi</h3>
			            <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <div class="col-md-12">

              <div class="alert alert-info alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <h4><i class="icon fa fa-info"></i> Informasi !</h4>
                    CONTOH TRANSAKSI DENGAN JURNAL KHUSUS
                    </div>
                    <div class="container">
                  		<h1><center>-- INFORMASI JURNAL REFERENSI --</center></h1>
                  		<br/>
                  		<ul class="nav nav-tabs">
                  			<li class="active"><a data-toggle="tab" href="#menu1">Jurnal Ref Pembelian</a></li>
                        <li><a data-toggle="tab" href="#menu3">Jurnal Ref Produksi</a></li>
                  			<li><a data-toggle="tab" href="#menu5">Jurnal Ref Penjualan</a></li>
                        <li><a data-toggle="tab" href="#menu2">Jurnal Ref Pindah Gudang 1 - 2</a></li>
                        <li><a data-toggle="tab" href="#menu4">Jurnal Ref Pindah Gudang 2 - 3</a></li>
                        <li><a data-toggle="tab" href="#menu6">Setup Penjualan</a></li>
                  		</ul>
                  		<div class="tab-content">
                  			<div id="menu1" class="tab-pane fade in active">
                          <br>
                          <table class=" table table-bordered table-striped display nowrap" style="width:100%">
                    <thead>
                    <tr>
                     <th>Pembelian</th>
                     <th></th>
                     <th>Akun</th>
                     <th>Nrml</th>
                    </tr>
                    </thead>

                    <tbody>

              <tr>
              <td>Uang Muka Pembelian</td>
              <td>Jurnal 1</td>
              <td>Uang Muka</td>
              <td>D</td>
              </tr>
              <tr>
              <td></td>
              <td></td>
              <td>Kas</td>
              <td>K</td>
              </tr>
              <tr>
              <td></td>
              <td></td>
              <td>Bank</td>
              <td>K</td>
              </tr>



              <tr>
              <td>Pembelian</td>
              <td>Jurnal 2</td>
              <td>Persediaan</td>
              <td>D</td>
              </tr>
              <tr>
              <td></td>
              <td></td>
              <td>Ppn beli</td>
              <td>D</td>
              </tr>
              <tr>
              <td></td>
              <td></td>
              <td>Ongkir beli</td>
              <td>D</td>
              </tr>
              <tr>
              <td></td>
              <td></td>
              <td>Hutang</td>
              <td>K</td>
              </tr>



              <tr>
              <td>Bila ada uang muka =></td>
              <td></td>
              <td>Hutang</td>
              <td>D</td>
              </tr>
              <tr>
              <td></td>
              <td></td>
              <td>Uang Muka beli</td>
              <td>K</td>
              </tr>



              <tr>
              <td>Pelunasan</td>
              <td>Jurnal 3</td>
              <td>Hutang</td>
              <td>D</td>
              </tr>
              <tr>
              <td></td>
              <td></td>
              <td>Kas</td>
              <td>K</td>
              </tr>
              <tr>
              <td></td>
              <td></td>
              <td>Bank</td>
              <td>K</td>
              </tr>



              <tr>
              <td>Retur Pembelian</td>
              <td>Jurnal 4</td>
              <td>Hutang</td>
              <td>D</td>
              </tr>
              <tr>
              <td></td>
              <td></td>
              <td>Persediaan</td>
              <td>K</td>
              </tr>
              <tr>
              <td></td>
              <td></td>
              <td>Ppn Beli</td>
              <td>K</td>
              </tr>
              <tr>
              <td></td>
              <td></td>
              <td>Ongkir Beli</td>
              <td>K</td>
              </tr>

                    </tbody>

                    <tfoot>
                    <tr>
                      <th>Pembelian</th>
                      <th></th>
                      <th>Akun</th>
                      <th>Nrml</th>
                    </tr>
                    </tfoot>
                  </table>
                  			</div>


                  			<div id="menu2" class="tab-pane fade"> <!-- MENU 2 PINDAH GUDANG 1 - 2 -->
                          <br>
                          <table class=" table table-bordered table-striped display nowrap" style="width:100%">
                    <thead>
                    <tr>
                     <th>Pindah Gd1 - Gd2</th>
                     <th></th>
                     <th>Akun</th>
                     <th>Nrml</th>
                    </tr>
                    </thead>

                    <tbody>

              <tr>
              <td>Kirim ke Gd 2</td>
              <td>Jurnal 1</td>
              <td>Persediaan Intransit</td>
              <td>D</td>
              </tr>
              <tr>
              <td></td>
              <td></td>
              <td>Persediaan Gd 1</td>
              <td>K</td>
              </tr>


              <tr>
              <td>Gd 2 terima barang</td>
              <td>Jurnal 2</td>
              <td>Persediaan Gd 2</td>
              <td>D</td>
              </tr>
              <tr>
              <td></td>
              <td></td>
              <td>Persediaan Intransit</td>
              <td>K</td>
              </tr>

              <tr>
              <td>Return ke Gd 1</td>
              <td>Jurnal 3</td>
              <td>Persediaan Intransit</td>
              <td>D</td>
              </tr>
              <tr>
              <td></td>
              <td></td>
              <td>Persediaan Gd 2</td>
              <td>K</td>
              </tr>

              <tr>
              <td>Terima retur Gd 2</td>
              <td>Jurnal 4</td>
              <td>Persediaan Gd 1</td>
              <td>D</td>
              </tr>
              <tr>
              <td></td>
              <td></td>
              <td>Persediaan Intransit</td>
              <td>K</td>
              </tr>

                    </tbody>

                    <tfoot>
                    <tr>
                     <th>Pindah Gd1 - Gd2</th>
                      <th></th>
                      <th>Akun</th>
                      <th>Nrml</th>
                    </tr>
                    </tfoot>
                  </table>
                  			</div>


                  			<div id="menu3" class="tab-pane fade"> <!-- MENU 3 JURNAL REFERENSI PRODUKSI -->
                          <br>
                          <table class=" table table-bordered table-striped display nowrap" style="width:100%">
                    <thead>
                    <tr>
                     <th>Produksi</th>
                     <th></th>
                     <th>Akun</th>
                     <th>Nrml</th>
                    </tr>
                    </thead>

                    <tbody>

              <tr>
              <td>Hasil Proses</td>
              <td>Jurnal 1</td>
              <td>Persediaan Gd2</td>
              <td>D</td>
              </tr>

              <tr>
              <td></td>
              <td></td>
              <td>Persediaan Gd 2</td>
              <td>K</td>
              </tr>
              <tr>
              <td></td>
              <td></td>
              <td>Biaya Upan Produksi</td>
              <td>K</td>
              </tr>
              <tr>
              <td></td>
              <td></td>
              <td>Biaya jasa Maklon</td>
              <td>K</td>
              </tr>
              <tr>
              <td></td>
              <td></td>
              <td>Biaya Listrik</td>
              <td>K</td>
              </tr>
              <tr>
              <td></td>
              <td></td>
              <td>Biaya Penyusutan inv.Pabrik</td>
              <td>K</td>
              </tr>
              <tr>
              <td></td>
              <td></td>
              <td>Biaya P & R mesin</td>
              <td>K</td>
              </tr>
              <tr>
              <td></td>
              <td></td>
              <td>Biaya perlengkapan Pabrik</td>
              <td>K</td>
              </tr>
              <tr>
              <td></td>
              <td></td>
              <td>Biaya lain</td>
              <td>K</td>
              </tr>




                    </tbody>

                    <tfoot>
                    <tr>
                     <th>Pindah Gd1 - Gd2</th>
                      <th></th>
                      <th>Akun</th>
                      <th>Nrml</th>
                    </tr>
                    </tfoot>
                  </table>
                  			</div>


                        <div id="menu4" class="tab-pane fade"> <!-- Jurnal Referensi Pindah Gudang  2-3 -->
                          <br>
                          <table class=" table table-bordered table-striped display nowrap" style="width:100%">
                    <thead>
                    <tr>
                     <th>Pindah Gd2 - Gd3</th>
                     <th></th>
                     <th>Akun</th>
                     <th>Nrml</th>
                    </tr>
                    </thead>

                    <tbody>

              <tr>
              <td>Kirim ke Gd 3</td>
              <td>Jurnal 1</td>
              <td>Persediaan Intransit</td>
              <td>D</td>
              </tr>
              <tr>
              <td></td>
              <td></td>
              <td>Persediaan Gd 2</td>
              <td>K</td>
              </tr>


              <tr>
              <td>Gd 3 terima barang</td>
              <td>Jurnal 2</td>
              <td>Persediaan Gd 3</td>
              <td>D</td>
              </tr>
              <tr>
              <td></td>
              <td></td>
              <td>Persediaan Intransit</td>
              <td>K</td>
              </tr>

              <tr>
              <td>Return ke Gd 2</td>
              <td>Jurnal 3</td>
              <td>Persediaan Intransit</td>
              <td>D</td>
              </tr>
              <tr>
              <td></td>
              <td></td>
              <td>Persediaan Gd 3</td>
              <td>K</td>
              </tr>

              <tr>
              <td>Terima retur Gd 3</td>
              <td>Jurnal 4</td>
              <td>Persediaan Gd 2</td>
              <td>D</td>
              </tr>
              <tr>
              <td></td>
              <td></td>
              <td>Persediaan Intransit</td>
              <td>K</td>
              </tr>

                    </tbody>

                    <tfoot>
                    <tr>
                     <th>Pindah Gd1 - Gd2</th>
                      <th></th>
                      <th>Akun</th>
                      <th>Nrml</th>
                    </tr>
                    </tfoot>
                  </table>
                        </div>


                        <div id="menu5" class="tab-pane fade"> <!-- Jurnal Referensi Penjualan -->
                          <br>
                          <table class=" table table-bordered table-striped display nowrap" style="width:100%">
                    <thead>
                    <tr>
                     <th>Penjualan</th>
                     <th></th>
                     <th>Akun</th>
                     <th>Nrml</th>
                    </tr>
                    </thead>

                    <tbody>

              <tr>
              <td>Pelunasan</td>
              <td>Jurnal 3</td>
              <td>Kas</td>
              <td>D</td>
              </tr>

              <tr>
              <td></td>
              <td></td>
              <td>Bank</td>
              <td>D</td>
              </tr>
              <tr>
              <td></td>
              <td></td>
              <td>Piutang</td>
              <td>K</td>
              </tr>




              <tr>
              <td>Retur Penjualan</td>
              <td>Jurnal 4</td>
              <td>Penjualan</td>
              <td>D</td>
              </tr>

              <tr>
              <td></td>
              <td></td>
              <td>Ppn jual</td>
              <td>D</td>
              </tr>
              <tr>
              <td></td>
              <td></td>
              <td>Ongkir Jual</td>
              <td>D</td>
              </tr>
              <tr>
              <td></td>
              <td></td>
              <td>Piutang</td>
              <td>K</td>
              </tr>
              <tr>
              <td></td>
              <td></td>
              <td>Persediaan</td>
              <td>D</td>
              </tr>
              <tr>
              <td></td>
              <td></td>
              <td>HPP</td>
              <td>K</td>
              </tr>





                    </tbody>

                    <tfoot>
                    <tr>
                     <th>Pindah Gd1 - Gd2</th>
                      <th></th>
                      <th>Akun</th>
                      <th>Nrml</th>
                    </tr>
                    </tfoot>
                  </table>
                        </div>




                        <div id="menu6" class="tab-pane fade"> <!-- Setup Penjualan -->
                          &nbsp;

                          <table class=" table table-bordered table-striped display nowrap" style="width:100%">
                    <thead>
                    <tr>
                     <th>No</th>
                     <th>Akun</th>
                     <th>No Akun</th>

                    </tr>
                    </thead>
<form class="" action="backend/p_e_refjurnal.php" method="post">
                    <tbody id = "employee_data">
      <?php
      include "config/koneksi.php";
      $no = 0;
      $query = mysqli_query($koneksi_utl,"SELECT* FROM refjurnal")or die(mysqli_error($koneksi_utl));
              $d = mysqli_fetch_array($query);
        $no++
        ?>
              <tr>
               <td>1</td>
              <td>Kas</td>
              <td>
                <?php
           include 'config/koneksi.php';
           $result = mysqli_query($koneksi_akun,"SELECT * FROM ms_akun "); //
   echo '
  <select name="kas" class = "form-control select2" required id="kas" >';
  echo '<option>Pilih No Akun</option>';
  while ($row = mysqli_fetch_array($result)) {
  echo '<option value="'.$row['kodeakun'].'">'.$row['kodeakun'].' - '.$row['namaakun'].'</option>';
  }
  echo '</select>';
   echo  "<div class = 'pull-right'><button type= 'button' class= 'btn bg-maroon btn-flat'>". $d['kas'] ."</div>";
  ?>
              </td>
              </tr>
              <tr>
                <td>2</td>
              <td>Bank</td>
              <td>
                <?php
           include 'config/koneksi.php';
           $result = mysqli_query($koneksi_akun,"SELECT * FROM ms_akun "); //
   echo '

  <select name="bank" class = "form-control select2" required id="bank" >';
  echo '<option>Pilih No Akun</option>';
  while ($row = mysqli_fetch_array($result)) {
  echo '<option value="'.$row['kodeakun'].'">'.$row['kodeakun'].' - '.$row['namaakun'].'</option>';
  }
  echo '</select>';
     echo  "<div class = 'pull-right'><button type= 'button' class= 'btn bg-maroon btn-flat'>". $d['bank'] ."</div>";
  ?>
              </td>
              </tr>
              <tr>
                <td>3</td>
              <td>Uang muka beli</td>
              <td>
                <?php
           include 'config/koneksi.php';
           $result = mysqli_query($koneksi_akun,"SELECT * FROM ms_akun "); //
   echo '

  <select name="umbeli" class = "form-control select2" required id="umbeli" >';
  echo '<option>Pilih No Akun</option>';
  while ($row = mysqli_fetch_array($result)) {
  echo '<option value="'.$row['kodeakun'].'">'.$row['kodeakun'].' - '.$row['namaakun'].'</option>';
  }
  echo '</select>';
     echo  "<div class = 'pull-right'><button type= 'button' class= 'btn bg-maroon btn-flat'>". $d['umbeli'] ."</div>";
  ?>
              </td>
              </tr>
              <tr>
                <td>4</td>
              <td>Hutang</td>
              <td>
                <?php
           include 'config/koneksi.php';
           $result = mysqli_query($koneksi_akun,"SELECT * FROM ms_akun "); //
   echo '

  <select name="hutang" class = "form-control select2" required id="hutang" >';
  echo '<option>Pilih No Akun</option>';
  while ($row = mysqli_fetch_array($result)) {
  echo '<option value="'.$row['kodeakun'].'">'.$row['kodeakun'].' - '.$row['namaakun'].'</option>';
  }
  echo '</select>';
     echo  "<div class = 'pull-right'><button type= 'button' class= 'btn bg-maroon btn-flat'>". $d['hutang'] ."</div>";
  ?>
              </td>
              </tr>
              <tr>
                <td>5</td>
              <td>Persediaan</td>
              <td>
                <?php
           include 'config/koneksi.php';
           $result = mysqli_query($koneksi_akun,"SELECT * FROM ms_akun "); //
   echo '

  <select name="persediaan" class = "form-control select2" required id="persediaan" >';
  echo '<option>Pilih No Akun</option>';
  while ($row = mysqli_fetch_array($result)) {
  echo '<option value="'.$row['kodeakun'].'">'.$row['kodeakun'].' - '.$row['namaakun'].'</option>';
  }
  echo '</select>';
     echo  "<div class = 'pull-right'><button type= 'button' class= 'btn bg-maroon btn-flat'>". $d['persediaan'] ."</div>";
  ?>
              </td>
              </tr>
              <tr>
                <td>6</td>
              <td>Ppn masuk</td>
              <td>
                <?php
           include 'config/koneksi.php';
           $result = mysqli_query($koneksi_akun,"SELECT * FROM ms_akun "); //
   echo '

  <select name="ppnmasuk" class = "form-control select2" required id="ppnmasuk" >';
  echo '<option>Pilih No Akun</option>';
  while ($row = mysqli_fetch_array($result)) {
  echo '<option value="'.$row['kodeakun'].'">'.$row['kodeakun'].' - '.$row['namaakun'].'</option>';
  }
  echo '</select>';
     echo  "<div class = 'pull-right'><button type= 'button' class= 'btn bg-maroon btn-flat'>". $d['ppnmasuk'] ."</div>";
  ?>
              </td>
              </tr>
              <tr>
                <td>7</td>
              <td>Ongkir beli</td>
              <td>
                <?php
           include 'config/koneksi.php';
           $result = mysqli_query($koneksi_akun,"SELECT * FROM ms_akun "); //
   echo '

  <select name="ongkirbeli" class = "form-control select2" required id="ongkirbeli" >';
  echo '<option>Pilih No Akun</option>';
  while ($row = mysqli_fetch_array($result)) {
  echo '<option value="'.$row['kodeakun'].'">'.$row['kodeakun'].' - '.$row['namaakun'].'</option>';
  }
  echo '</select>';
     echo  "<div class = 'pull-right'><button type= 'button' class= 'btn bg-maroon btn-flat'>". $d['ongkirbeli'] ."</div>";
  ?>
              </td>
              </tr>
              <tr>
                <td>8</td>
              <td>Persediaan in transit</td>
              <td>
                <?php
           include 'config/koneksi.php';
           $result = mysqli_query($koneksi_akun,"SELECT * FROM ms_akun "); //
   echo '

  <select name="persediaan_in_transit" class = "form-control select2" required id="persediaan_in_transit" >';
  echo '<option>Pilih No Akun</option>';
  while ($row = mysqli_fetch_array($result)) {
  echo '<option value="'.$row['kodeakun'].'">'.$row['kodeakun'].' - '.$row['namaakun'].'</option>';
  }
  echo '</select>';
     echo  "<div class = 'pull-right'><button type= 'button' class= 'btn bg-maroon btn-flat'>". $d['persediaan_in_transit'] ."</div>";
  ?>
              </td>
              </tr>
              <tr>
                <td>9</td>
              <td>Persediaan GD1</td>
              <td>
                <?php
           include 'config/koneksi.php';
           $result = mysqli_query($koneksi_akun,"SELECT * FROM ms_akun "); //
   echo '

  <select name="persediaan_gd1" class = "form-control select2" required id="persediaan_gd1" >';
  echo '<option>Pilih No Akun</option>';
  while ($row = mysqli_fetch_array($result)) {
  echo '<option value="'.$row['kodeakun'].'">'.$row['kodeakun'].' - '.$row['namaakun'].'</option>';
  }
  echo '</select>';
     echo  "<div class = 'pull-right'><button type= 'button' class= 'btn bg-maroon btn-flat'>". $d['persediaan_gd1'] ."</div>";
  ?>
              </td>
              </tr>
              <tr>
                <td>10</td>
              <td>Persediaan GD2</td>
              <td>
                <?php
           include 'config/koneksi.php';
           $result = mysqli_query($koneksi_akun,"SELECT * FROM ms_akun "); //
   echo '

  <select name="persediaan_gd2" class = "form-control select2" required id="persediaan_gd2" >';
  echo '<option>Pilih No Akun</option>';
  while ($row = mysqli_fetch_array($result)) {
  echo '<option value="'.$row['kodeakun'].'">'.$row['kodeakun'].' - '.$row['namaakun'].'</option>';
  }
  echo '</select>';
     echo  "<div class = 'pull-right'><button type= 'button' class= 'btn bg-maroon btn-flat'>". $d['persediaan_gd2'] ."</div>";
  ?>
              </td>
              </tr>
              <tr>
                <td>11</td>
              <td>Persediaan brg jadi</td>
              <td>
                <?php
           include 'config/koneksi.php';
           $result = mysqli_query($koneksi_akun,"SELECT * FROM ms_akun "); //
   echo '

  <select name="persediaan_brg_jadi" class = "form-control select2" required id="persediaan_brg_jadi" >';
  echo '<option>Pilih No Akun</option>';
  while ($row = mysqli_fetch_array($result)) {
  echo '<option value="'.$row['kodeakun'].'">'.$row['kodeakun'].' - '.$row['namaakun'].'</option>';
  }
  echo '</select>';
     echo  "<div class = 'pull-right'><button type= 'button' class= 'btn bg-maroon btn-flat'>". $d['persediaan_brg_jadi'] ."</div>";
  ?>
              </td>
              </tr>
              <tr>
                <td>12</td>
              <td>Persediaan bahan baku dlm proses</td>
              <td>
                <?php
           include 'config/koneksi.php';
           $result = mysqli_query($koneksi_akun,"SELECT * FROM ms_akun "); //
   echo '

  <select name="persediaan_bahan_baku_dlm_proses" class = "form-control select2" required id="persediaan_bahan_baku_dlm_proses" >';
  echo '<option>Pilih No Akun</option>';
  while ($row = mysqli_fetch_array($result)) {
  echo '<option value="'.$row['kodeakun'].'">'.$row['kodeakun'].' - '.$row['namaakun'].'</option>';
  }
  echo '</select>';
     echo  "<div class = 'pull-right'><button type= 'button' class= 'btn bg-maroon btn-flat'>". $d['persediaan_bahan_baku_dlm_proses'] ."</div>";
  ?>
              </td>
              </tr>
              <tr>
                <td>13</td>
              <td>Persediaan bahan pembantu</td>
              <td>
                <?php
           include 'config/koneksi.php';
           $result = mysqli_query($koneksi_akun,"SELECT * FROM ms_akun "); //
   echo '

  <select name="persediaan_bahan_pembantu" class = "form-control select2" required id="persediaan_bahan_pembantu" >';
  echo '<option>Pilih No Akun</option>';
  while ($row = mysqli_fetch_array($result)) {
  echo '<option value="'.$row['kodeakun'].'">'.$row['kodeakun'].' - '.$row['namaakun'].'</option>';
  }
  echo '</select>';
     echo  "<div class = 'pull-right'><button type= 'button' class= 'btn bg-maroon btn-flat'>". $d['persediaan_bahan_pembantu'] ."</div>";
  ?>
              </td>
              </tr>
              <tr>
                <td>14</td>
              <td>Biaya upah produksi</td>
              <td>
                <?php
           include 'config/koneksi.php';
           $result = mysqli_query($koneksi_akun,"SELECT * FROM ms_akun "); //
   echo '

  <select name="biaya_upah_produksi" class = "form-control select2" required id="biaya_upah_produksi" >';
  echo '<option>Pilih No Akun</option>';
  while ($row = mysqli_fetch_array($result)) {
  echo '<option value="'.$row['kodeakun'].'">'.$row['kodeakun'].' - '.$row['namaakun'].'</option>';
  }
  echo '</select>';
     echo  "<div class = 'pull-right'><button type= 'button' class= 'btn bg-maroon btn-flat'>". $d['biaya_upah_produksi'] ."</div>";
  ?>
              </td>
              </tr>
              <tr>
                <td>15</td>
              <td>Biaya jasa maklon</td>
              <td>
                <?php
           include 'config/koneksi.php';
           $result = mysqli_query($koneksi_akun,"SELECT * FROM ms_akun "); //
   echo '

  <select name="biaya_jasa_maklon" class = "form-control select2" required id="biaya_jasa_maklon" >';
  echo '<option>Pilih No Akun</option>';
  while ($row = mysqli_fetch_array($result)) {
  echo '<option value="'.$row['kodeakun'].'">'.$row['kodeakun'].' - '.$row['namaakun'].'</option>';
  }
  echo '</select>';
     echo  "<div class = 'pull-right'><button type= 'button' class= 'btn bg-maroon btn-flat'>". $d['biaya_jasa_maklon'] ."</div>";
  ?>
              </td>
              </tr>
              <tr>
                <td>16</td>
              <td>Biaya biaya listrik</td>
              <td>
                <?php
           include 'config/koneksi.php';
           $result = mysqli_query($koneksi_akun,"SELECT * FROM ms_akun "); //
   echo '

  <select name="biaya_biaya_listrik" class = "form-control select2" required id="biaya_biaya_listrik" >';
  echo '<option>Pilih No Akun</option>';
  while ($row = mysqli_fetch_array($result)) {
  echo '<option value="'.$row['kodeakun'].'">'.$row['kodeakun'].' - '.$row['namaakun'].'</option>';
  }
  echo '</select>';
     echo  "<div class = 'pull-right'><button type= 'button' class= 'btn bg-maroon btn-flat'>". $d['biaya_biaya_listrik'] ."</div>";
  ?>
              </td>
              </tr>
              <tr>
                <td>17</td>
              <td>Biaya penyusutan inv pabrik</td>
              <td>
                <?php
           include 'config/koneksi.php';
           $result = mysqli_query($koneksi_akun,"SELECT * FROM ms_akun "); //
   echo '

  <select name="biaya_penyusutan_inv_pabrik" class = "form-control select2" required id="biaya_penyusutan_inv_pabrik" >';
  echo '<option>Pilih No Akun</option>';
  while ($row = mysqli_fetch_array($result)) {
  echo '<option value="'.$row['kodeakun'].'">'.$row['kodeakun'].' - '.$row['namaakun'].'</option>';
  }
  echo '</select>';
     echo  "<div class = 'pull-right'><button type= 'button' class= 'btn bg-maroon btn-flat'>". $d['biaya_penyusutan_inv_pabrik'] ."</div>";
  ?>
              </td>
              </tr>
              <tr>
                <td>18</td>
              <td>Biaya P&R mesin</td>
              <td>
                <?php
           include 'config/koneksi.php';
           $result = mysqli_query($koneksi_akun,"SELECT * FROM ms_akun "); //
   echo '

  <select name="biaya_pr_mesin" class = "form-control select2" required id="biaya_pr_mesin" >';
  echo '<option>Pilih No Akun</option>';
  while ($row = mysqli_fetch_array($result)) {
  echo '<option value="'.$row['kodeakun'].'">'.$row['kodeakun'].' - '.$row['namaakun'].'</option>';
  }
  echo '</select>';
     echo  "<div class = 'pull-right'><button type= 'button' class= 'btn bg-maroon btn-flat'>". $d['biaya_pr_mesin'] ."</div>";
  ?>
              </td>
             </tr>
              <tr>
                <td>19</td>
              <td>Biaya perlengkapan pabrik</td>
              <td>
                <?php
           include 'config/koneksi.php';
           $result = mysqli_query($koneksi_akun,"SELECT * FROM ms_akun "); //
   echo '

  <select name="biaya_perlengkapan_pabrik" class = "form-control select2" required id="biaya_perlengkapan_pabrik" >';
  echo '<option>Pilih No Akun</option>';
  while ($row = mysqli_fetch_array($result)) {
  echo '<option value="'.$row['kodeakun'].'">'.$row['kodeakun'].' - '.$row['namaakun'].'</option>';
  }
  echo '</select>';
     echo  "<div class = 'pull-right'><button type= 'button' class= 'btn bg-maroon btn-flat'>". $d['biaya_perlengkapan_pabrik'] ."</div>";
  ?>
              </td>
              </tr>
              <tr>
                <td>20</td>
              <td>Biaya lain</td>
              <td>
                <?php
           include 'config/koneksi.php';
           $result = mysqli_query($koneksi_akun,"SELECT * FROM ms_akun "); //
   echo '

  <select name="biaya_lain" class = "form-control select2" required id="biaya_lain" >';
  echo '<option>Pilih No Akun</option>';
  while ($row = mysqli_fetch_array($result)) {
  echo '<option value="'.$row['kodeakun'].'">'.$row['kodeakun'].' - '.$row['namaakun'].'</option>';
  }
  echo '</select>';
     echo  "<div class = 'pull-right'><button type= 'button' class= 'btn bg-maroon btn-flat'>". $d['biaya_lain'] ."</div>";
  ?>
              </td>
              </tr>
              <tr>
                <td>21</td>
              <td>Persediaan GD3</td>
              <td>
                <?php
           include 'config/koneksi.php';
           $result = mysqli_query($koneksi_akun,"SELECT * FROM ms_akun "); //
   echo '

  <select name="persediaan_gd3" class = "form-control select2" required id="persediaan_gd3" >';
  echo '<option>Pilih No Akun</option>';
  while ($row = mysqli_fetch_array($result)) {
  echo '<option value="'.$row['kodeakun'].'">'.$row['kodeakun'].' - '.$row['namaakun'].'</option>';
  }
  echo '</select>';
     echo  "<div class = 'pull-right'><button type= 'button' class= 'btn bg-maroon btn-flat'>". $d['persediaan_gd3'] ."</div>";
  ?>
              </td>
              </tr>
              <tr>
                <td>22</td>
              <td>Umjual</td>
              <td>
                <?php
           include 'config/koneksi.php';
           $result = mysqli_query($koneksi_akun,"SELECT * FROM ms_akun "); //
   echo '

  <select name="umjual" class = "form-control select2" required id="umjual">';
  echo '<option>Pilih No Akun</option>';
  while ($row = mysqli_fetch_array($result)) {
  echo '<option value="'.$row['kodeakun'].'">'.$row['kodeakun'].' - '.$row['namaakun'].'</option>';
  }
  echo '</select>';
     echo  "<div class = 'pull-right'><button type= 'button' class= 'btn bg-maroon btn-flat'>". $d['umjual'] ."</div>";
  ?>
              </td>
              </tr>
              <tr>
                <td>23</td>
              <td>Piutang</td>
              <td>
                <?php
           include 'config/koneksi.php';
           $result = mysqli_query($koneksi_akun,"SELECT * FROM ms_akun "); //
   echo '

  <select name="piutang" class = "form-control select2" required id="piutang">';
  echo '<option>Pilih No Akun</option>';
  while ($row = mysqli_fetch_array($result)) {
  echo '<option value="'.$row['kodeakun'].'">'.$row['kodeakun'].' - '.$row['namaakun'].'</option>';
  }
  echo '</select>';
     echo  "<div class = 'pull-right'><button type= 'button' class= 'btn bg-maroon btn-flat'>". $d['piutang'] ."</div>";
  ?>
              </td>
              </tr>
              <tr>
                <td>24</td>
              <td>Penjualan</td>
              <td>
                <?php
           include 'config/koneksi.php';
           $result = mysqli_query($koneksi_akun,"SELECT * FROM ms_akun "); //
   echo '

  <select name="penjualan" class = "form-control select2" required id="penjualan">';
  echo '<option>Pilih No Akun</option>';
  while ($row = mysqli_fetch_array($result)) {
  echo '<option value="'.$row['kodeakun'].'">'.$row['kodeakun'].' - '.$row['namaakun'].'</option>';
  }
  echo '</select>';
     echo  "<div class = 'pull-right'><button type= 'button' class= 'btn bg-maroon btn-flat'>". $d['penjualan'] ."</div>";
  ?>
              </td>
              </tr>
              <tr>
                <td>25</td>
              <td>Ppn keluar</td>
              <td>
                <?php
           include 'config/koneksi.php';
           $result = mysqli_query($koneksi_akun,"SELECT * FROM ms_akun "); //
   echo '

  <select name="ppnkeluar" class = "form-control select2" required id="ppnkeluar">';
  echo '<option>Pilih No Akun</option>';
  while ($row = mysqli_fetch_array($result)) {
  echo '<option value="'.$row['kodeakun'].'">'.$row['kodeakun'].' - '.$row['namaakun'].'</option>';
  }
  echo '</select>';
     echo  "<div class = 'pull-right'><button type= 'button' class= 'btn bg-maroon btn-flat'>". $d['ppnkeluar'] ."</div>";
  ?>
              </td>
              </tr>
              <tr>
                <td>26</td>
              <td>Ongkirjual</td>
              <td>
                <?php
           include 'config/koneksi.php';
           $result = mysqli_query($koneksi_akun,"SELECT * FROM ms_akun "); //
   echo '

  <select name="ongkirjual" class = "form-control select2" required id="ongkirjual">';
  echo '<option>Pilih No Akun</option>';
  while ($row = mysqli_fetch_array($result)) {
  echo '<option value="'.$row['kodeakun'].'">'.$row['kodeakun'].' - '.$row['namaakun'].'</option>';
  }
  echo '</select>';
     echo  "<div class = 'pull-right'><button type= 'button' class= 'btn bg-maroon btn-flat'>". $d['ongkirjual'] ."</div>";
  ?>
              </td>
              </tr>
              <tr>
                <td>27</td>
              <td>Hpp</td>
              <td>
                <?php
           include 'config/koneksi.php';
           $result = mysqli_query($koneksi_akun,"SELECT * FROM ms_akun "); //
   echo '

  <select name="hpp" class = "form-control select2" required id="hpp">';
  echo '<option>Pilih No Akun</option>';
  while ($row = mysqli_fetch_array($result)) {
  echo '<option value="'.$row['kodeakun'].'">'.$row['kodeakun'].' - '.$row['namaakun'].'</option>';
  }
  echo '</select>';
     echo  "<div class = 'pull-right'><button type= 'button' class= 'btn bg-maroon btn-flat'>". $d['hpp'] ."</div>";
  ?>
              </td>
              </tr>
              <tr>
                <td>28</td>
              <td>Retur Penjualan</td>
              <td>
                <?php
           include 'config/koneksi.php';
           $result = mysqli_query($koneksi_akun,"SELECT * FROM ms_akun "); // SELECT $KONEKSI MS_AKUN
   echo '

  <select name="retur_penjualan" class = "form-control select2" required id="retur_penjualan">';
  echo '<option>Pilih No Akun</option>';
  while ($row = mysqli_fetch_array($result)) {
  echo '<option value="'.$row['kodeakun'].'">'.$row['kodeakun'].' - '.$row['namaakun'].'</option>';
  }
  echo '</select>';
     echo  "<div class = 'pull-right'><button type= 'button' class= 'btn bg-maroon btn-flat'>". $d['retur_penjualan'] ."</div>";
  ?>
              </td>
              </tr>
                    </tbody>

                    <tfoot>
                    <tr>
                      <th>Nama Counter</th>
                      <th>Header ( 2 dgt )</th>
                      <th>No Counter ( 8 dgt)</th>
                    </tr>
                    </tfoot>
                  </table>
                  <br>
                        <div class = "pull-right">
                           <input type = "submit" id = "simpan" name = "simpan"  value = "Simpan" class = "btn btn-info" ></input>
                           </div>
</form>
                  		</div>
                  	</div>
                    </div>


            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  <!-- /.content-wrapper -->
</div>
<script type="text/javascript">
//turn to inline mode
$.fn.editable.defaults.mode = 'inline';
$('#employee_data').editable({
 container: 'body',
 selector: 'td.kodepo,td.koderb,td.kodefpb,td.kodefkb,td.kodero,td.kodeg2g3,td.returg3g2,td.kodesi,td.kodesj,td.kodekwi,td.kodeasmsk,td.kodekasklr,td.kodekastb,td.kodein,td.kodein2,td.kodein3,td.kodeacc',
 url: "backend/p_e_nocounter.php",
 title: 'Input Kode Counter',
 type: "POST",
 dataType: 'json',
 validate: function(value){
  if($.trim(value) == '')
  {
   return false;
  }
 }
});
</script>

<!-- ./wrapper -->
<?php include 'config/footer.php'; ?>
</body>
</html>
<?php } ?>
