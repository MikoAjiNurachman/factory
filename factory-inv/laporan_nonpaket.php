<!DOCTYPE html>

<?php include '../config/head.php'; ?>
<style type="text/css">
    .input_petugas[readonly] {
    background-color: white ; 
    color:red;
    border:0px;
    }
        </style>
<?php
if($_SESSION['level']=='Admin'){
?>

<body class="hold-transition skin-blue sidebar-mini">
<?php include '../config/aside.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Laporan Periode Pemesanan
        <small>Jogja Airport Resto</small>
      </h1>
	  
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
	  <a href = "laporan_nonpaket.php"><button type = "button" class = "btn btn-warning"><b>REFRESH</b></button></a>
	  <a href = "../nota/export_excel_nonpaket.php"><button type = "button" class = "btn btn-info">Export CVS</button></a>
    </section>

        <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Filter Periode</h3>
			            <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <div class="col-md-12">
				
				
				<form action = "" method = "post">

			  <div class="alert alert-info alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-info"></i> Informasi !</h4>
                PILIH TANGGAL UNTUK MENAMPILKAN DATA LAPORAN PERIODE !
              </div>
  
  <div class = "col-md-12">
		<input type="hidden" name="id_paket" value="<?=$kode_otomatis?>" class="form-control" readonly>
	</div>
	
			  
			<div class="col-md-4">
			   <div class="form-group">
                <label>Dari Tanggal :</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" name = "dari_tanggal" class="form-control">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
			 </div>
			  
			<div class="col-md-4">
			  <div class="form-group">
                <label>Sampai Tanggal :</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" name = "sampai_tanggal" class="form-control">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
             </div>
			 
			<div class="col-md-4">
			   <div class="form-group">
                <label>Order by Petugas</label>
               <input type="text" class="form-control" name = "petugas" placeholder="Input Nama Petugas..." >
              </div>
             </div>
			  
			  <br>
			<div class="col-md-12">
			<div class = "pull-right">
			<button type = "reset" class = "btn btn-danger" >Reset</button>
			   <input type = "submit"  value = "Filter" id = "pencarian" name = "pencarian" class = "btn btn-info" ></input>
			   </div>
			   </div>
			  
	</form>
	
	            <div class="box-body">
            <div class="col-md-12">
				
				
				<form action = "" method = "post">

  
  <div class = "col-md-12">
		<input type="hidden" name="id_paket" value="<?=$kode_otomatis?>" class="form-control" readonly>
	</div>
	
			  
			<div class="col-md-1">
			   <div class="form-group">
                <label><h5>TOTAL</h5></label>
              </div>
              <!-- /.form group -->
			 </div>
			  
			  	<?php 
	include '../config/koneksi.php'; 
 error_reporting(0);
			if(isset($_POST['pencarian'])){
			$dari_tanggal = $_POST['dari_tanggal'];
			$sampai_tanggal = $_POST['sampai_tanggal'];
			$petugas = $_POST['petugas'];
			
				$sql2=mysql_query("SELECT sum(total_harga) as total2 FROM pemesanan WHERE petugas like '%".$petugas."%' AND tgl_pesan between '$dari_tanggal' AND '$sampai_tanggal'");
			}else{
				$sql2 = mysql_query("select * from pemesanan");
			}
			
			$dataTampil2 = mysql_fetch_array($sql2);
			?>	
					
			  
			<div class="col-md-4">
			  <div class="form-group">
                <h1><input type = "text" class ="input_petugas" width = "100%" readonly value = "<?php echo number_format($dataTampil2['total2']);?>"></input></h1>
              </div>
              <!-- /.form group -->
             </div>
			 
			 			<div class="col-md-1">
			   <div class="form-group">
                <label><h5>Petugas</h5></label>
              </div>
              <!-- /.form group -->
			 </div>
			  
	<?php 
	include '../config/koneksi.php'; 
			if(isset($_POST['pencarian'])){
			$dari_tanggal = $_POST['dari_tanggal'];
			$sampai_tanggal = $_POST['sampai_tanggal'];
			$petugas = $_POST['petugas'];
			
				$sql=mysql_query("SELECT * FROM pemesanan WHERE petugas like '%".$petugas."%' AND tgl_pesan between '$dari_tanggal' AND '$sampai_tanggal' ORDER BY tgl_pesan DESC");
					$count3=mysql_num_rows($sql);
			}else{
				$sql = mysql_query("SELECT * FROM pemesanan ORDER BY tgl_pesan DESC");
			}
			
			$dataTampil = mysql_fetch_array($sql);
			?>	
					
			  
			<div class="col-md-2">
			  <div class="form-group">
                <h2 width = "100%"><?php echo $petugas;?></h2>
              </div>
              <!-- /.form group -->
             </div>
			  
			  			 			<div class="col-md-1">
			   <div class="form-group">
                <label><h5>Total Pesanan</h5></label>
              </div>
              <!-- /.form group -->
			 </div>
			  
	<?php 
	include '../config/koneksi.php'; 
			if(isset($_POST['pencarian'])){
			$dari_tanggal = $_POST['dari_tanggal'];
			$sampai_tanggal = $_POST['sampai_tanggal'];
			$petugas = $_POST['petugas'];
			
				$sql=mysql_query("SELECT * FROM pemesanan WHERE petugas like '%".$petugas."%' AND tgl_pesan between '$dari_tanggal' AND '$sampai_tanggal' ORDER BY tgl_pesan DESC");
					$count3=mysql_num_rows($sql);
			}else{
				$sql = mysql_query("SELECT * FROM pemesanan ORDER BY tgl_pesan DESC");
			}
			
			$dataTampil = mysql_fetch_array($sql);
			?>	
					
			  
			<div class="col-md-1">
			  <div class="form-group">
                <h1 width = "100%"><?php echo $count3;?></h1>
              </div>
              <!-- /.form group -->
             </div>
			
			  
	</form>

		
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

		
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
	  
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Data Tampil Filter</h3>
			            <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
				
				              <table id="example4" class=" table table-bordered table-striped">
                <thead>

                <tr>
                <tr>
				<th>No</th>
                  <th>Nama </th>
                  <th>Tgl </th>
                  <th>No Meja</th>
                  <th>Total Harga </th>
                  <th>Bayar </th>
                  <th>Kembali</th>
                  <th>Petugas</th>
                  <th colspan = "1">TOTAL PENDAPATAN = Rp. <?php echo number_format($dataTampil2['total2']);?> -,</th>
                </tr>
                </thead>

                <tbody>
	<?php 
	include '../config/koneksi.php'; 
			$no = 0;
 
			if(isset($_POST['pencarian'])){
			$dari_tanggal = $_POST['dari_tanggal'];
			$sampai_tanggal = $_POST['sampai_tanggal'];
			$petugas = $_POST['petugas'];
			
				$sql=mysql_query("SELECT * FROM pemesanan WHERE petugas like '%".$petugas."%' AND tgl_pesan between '$dari_tanggal' AND '$sampai_tanggal' ORDER BY tgl_pesan DESC");
					$count3=mysql_num_rows($sql);
			}else{
				$sql = mysql_query("SELECT * FROM pemesanan ORDER BY tgl_pesan DESC");
			}
			
			while($dataTampil = mysql_fetch_array($sql)){
			$no++;
			?>	
					<tr>
					<td><?php echo $no; ?></td>
					<td><?php echo $dataTampil['nama_pembeli'];?></td>
					<td><?php echo $dataTampil['tgl_pesan'];?></td>
					<td><?php echo $dataTampil['no_meja'];?></td>
					<td><?php echo number_format($dataTampil['total_harga']);?></td>
					<td><?php echo number_format($dataTampil['bayar']);?></td>
					<td><?php echo number_format($dataTampil['kembalian']);?></td>
					<td><?php echo $dataTampil['petugas'];?></td>
					<td></td>
								
					

									
					</tr>
									<?php } ?>
                </tbody>

                <tfoot>
	
                <tr>
				<th>No</th>
                  <th>Nama </th>
                  <th>Tgl </th>
                  <th>No Meja</th>
                  <th>Total Harga </th>
                  <th>Bayar </th>
                  <th>Kembali</th>
                  <th>Petugas</th>
                  <th colspan = "1">TOTAL PENDAPATAN = Rp. <?php echo number_format($dataTampil2['total2']);?> -,</th>
                </tr>
                </tfoot>
              </table>

            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
	  

          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
	  <?php include '../config/footer.php'; ?>
    </section>
    <!-- /.content -->
  <!-- /.content-wrapper -->
</div>

<!-- ./wrapper -->



</body>
</html>

<?php }
else if($_SESSION['level']=='Manajer'){
	echo"<script> alert ('Maaf Anda tidak diperbolehkan untuk mengaksesnya'); window.history.go(-1);</script>";
	}
else if($_SESSION['level']=='Kasir'){
	echo"<script> alert ('Maaf Anda tidak diperbolehkan untuk mengaksesnya'); window.history.go(-1);</script>";
	}
else if($_SESSION['level']=='Waitress'){
	echo"<script> alert ('Maaf Anda tidak diperbolehkan untuk mengaksesnya'); window.history.go(-1);</script>";
	}
?>
