<!DOCTYPE html>
<?php include 'config/head.php'; ?>
<?php
include "config/koneksi.php";
$query = mysqli_query($koneksi_utl,"SELECT * FROM profile");
while ($dataTampil = mysqli_fetch_array($query)) {
	?>
	<title><?php echo $dataTampil[1];?> - Procucrement</title>

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
						Data Master Purchase Order - Procurement
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
							<h3 class="box-title">Form Input Purchase Order</h3>
							<div class="box-tools pull-right">
								<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
							</div>
						</div>
						<!-- /.box-header -->
						<div class="box-body">
							<div class="col-md-12">

								<form action = "#" method = "post">

									<div class="alert alert-info alert-dismissible">
										<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
										<h4><i class="icon fa fa-info"></i> Informasi !</h4>
										DISINI ANDA DIPERBOLEHKAN UNTUK MENCARI, MENAMBAH, MENGUPDATE DAN MENGHAPUS DATA PURCHASE ORDER
									</div>

									<div class="col-xs-6">
									<label class="form-group">No PO</label>
									<?php include 'config/kode_otomatis.php';?>
									<input type="text" name="no_po" value="<?= $new?>" readonly>
									</div>
									<div class="col-md-6">
									<label class="form-group">tgl PO</label>
									<input type="text" name="tgl_po" value="<?= date('d-m-y')?>" readonly>
									</div>
									<div class="col-xs-6">
									<label class="form-group">Id Supp</label>
									<select onchange="njir()" id="idSupp">
										<option value="0">---Pilih---</option>
										<?php
										include 'config/koneksi.php';
										$a = mysqli_query($koneksi_pcr,"SELECT * FROM apmst");

										foreach ($a as $key)
										:?>
										<option value="<?= $key['kodesup'];?>"><?= $key['kodesup'];?></option>	
										<?php endforeach ; ?>
									</select>
									</div>
									<div class="">
									<input type="text" name="namasupp" id="namasup" readonly >
									</div>







									
									<br>

									<div class = "pull-right">
										<input type = "reset" value = "Reset" class = "btn btn-danger" ></input>
										<input type = "button" name = "save" value="Save" class = "btn btn-primary" ></input>
									</div>
									
								</form>


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
							<h3 class="box-title"> List Data Supplier</h3>
							<div class="box-tools pull-right">
								<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
							</div>
						</div>
						<!-- /.box-header -->
						<div class="box-body">
							<form action="backend/p_d_b_supplier.php" method="post">
								<table id="example5" class=" table table-bordered table-striped display nowrap" style="width:100%">
									<thead>
										<tr>
											<th><input type="checkbox" id="check-all"></th>
											<th>No</th>
											<th>Kode Supplier</th>
											<th>Nama Supplier</th>
											<th>Kota</th>
											<th>Telp</th>
											<th>Alamat </th>
											<th>Act </th>
										</tr>
									</thead>

									<tbody>
										<?php
										include "config/koneksi.php";
										$no = 0;
										error_reporting(0);
										if(isset($_POST['search'])){
											$kodesup1 = $_POST['kodesup1'];
											$kodesup2 = $_POST['kodesup2'];
											$namasup1 = $_POST['namasup1'];
											$namasup2 = $_POST['namasup2'];

											$sql=mysqli_query($koneksi_pcr,"SELECT * FROM apmst  WHERE kodesup between '$kodesup1' AND '$kodesup2'
												or namasup  like '%". $namasup1 ."%' AND '%". $namasup2 ."%' ORDER BY kodesup ")or die (mysqli_error($koneksi_pcr));
										}else{
											$sql = mysqli_query($koneksi_pcr,"SELECT * FROM apmst ORDER BY namasup DESC") or die (mysqli_error($koneksi_inv));
										}

										while($d = mysqli_fetch_array($sql)){
											$no++;
											?>
											<tr>
												<td><input type="checkbox" class="check-item" id="cekbox" name="cekbox[]" value="<?php echo $d['kodesup'] ?>"/></td>
												<td><?php echo $no; ?></td>
												<td><?php echo $d[0];?></td>
												<td><?php echo $d[1];?></td>
												<td><?php echo $d[4];?></td>
												<td><?php echo $d[7];?></td>
												<td><?php echo $d[2];?></td>

												<td>
													<a id = "info_ms_supplier" href = "info_ms_supplier.php?kodesup=<?php echo $d[0]; ?>"
														<button type="button" data-toggle="modal" data-target="#modal-pcr" class="btn btn-info btn-m"><i class="fa fa-search"></i> </button></a>

														<a id = "_edit_ms_supplier" href = "_edit_ms_supplier.php?kodesup=<?php echo $d[0]; ?>"
															<button type="button" data-toggle="modal" data-target="#modal-infopcr" class="btn btn-primary btn-m"><i class="fa fa-edit"></i> </button></a>

															<a href = "barcode/#?kodesup=<?php echo $d[1]; ?>" onclick="return confirm('Apakah anda yakin untuk print data Supplier : <?php echo $d[0];?> ?')" <button type="button" target="_blank"  class="btn btn-success btn-s"><i class="fa fa-print"></i></button></a>
															<a href = "backend/p_d_supplier.php?kodesup=<?php echo $d[0]; ?>" onclick="return confirm('Apakah anda yakin untuk menghapus Supplier : <?php echo $d[1];?> ?')" <button type="button"  class="btn btn-danger btn-s"><i class="fa fa-trash"></i></button></a>
														</td>



													</tr>
												<?php } ?>
											</tbody>

											<tfoot>
												<tr>
													<th>Pilih</th>
													<th>No</th>
													<th>Kode Supplier</th>
													<th>Nama Supplier</th>
													<th>Kota</th>
													<th>Telp</th>
													<th>Alamat </th>
													<th>Act </th>
												</tr>
											</tfoot>
										</table>
										<input type="submit" onclick="return confirm('Apakah anda yakin untuk menghapus data inventory yang terpilih ?')" value="Hapus" name="submit" /><br />
									</form>

									<div class="modal fade" id="modal-infopcr" tabindex="-1" role="dialog" aria-labelledby="keterangan" aria-hidden="true"></div>
									<div class="modal fade" id="modal-pcr" tabindex="-1" role="dialog" aria-labelledby="keterangan" aria-hidden="true"></div>
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

				<!-- ./wrapper -->

				<?php include 'config/footer.php'; ?>

				<script type="text/javascript">
					function njir() {
					$(document).ready(function () {
						var idSupp = $('#idSupp').val();
						$.ajax({
							url:'backend/ajax.php',
							data:"idSupp="+idSupp,
						}).success(function (data) {
							var json = data,
							obj = JSON.parse(json);
							$('#namasupp').val(obj.namasupp);
						});
					});	
				}
				</script>

				<script type="text/javascript">
					$(document).ready(function(){
						$('a#_edit_ms_supplier').click(function(){
							var url = $(this).attr('href');
							$.ajax({
								url : url,
								success:function(response){
									$('#modal-infopcr').html(response);
								}
							});
						});

					});
				</script>

				<script type="text/javascript">
					$(document).ready(function(){
						$('a#info_ms_supplier').click(function(){
							var url = $(this).attr('href');
							$.ajax({
								url : url,
								success:function(response){
									$('#modal-pcr').html(response);
								}
							});
						});

					});
				</script>

				<!-- hapus banyak data -->
				<script>
  $(document).ready(function(){ // Ketika halaman sudah siap (sudah selesai di load)
    $("#check-all").click(function(){ // Ketika user men-cek checkbox all
      if($(this).is(":checked")) // Jika checkbox all diceklis
        $(".check-item").prop("checked", true); // ceklis semua checkbox siswa dengan class "check-item"
      else // Jika checkbox all tidak diceklis
        $(".check-item").prop("checked", false); // un-ceklis semua checkbox siswa dengan class "check-item"
});

    $("#btn-delete").click(function(){ // Ketika user mengklik tombol delete
      var confirm = window.confirm("Apakah Anda yakin ingin menghapus data-data ini?"); // Buat sebuah alert konfirmasi

      if(confirm) // Jika user mengklik tombol "Ok"
        $("#form-delete").submit(); // Submit form
});
});
</script>
</body>
</html>
<?php } ?>
