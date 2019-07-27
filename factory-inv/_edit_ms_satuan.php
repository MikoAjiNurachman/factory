<!DOCTYPE html>

<?php include 'config/head.php'; ?>
<?php
include "config/koneksi.php";
$query = mysqli_query($koneksi_utl,"SELECT * FROM profile");
while ($dataTampil = mysqli_fetch_array($query)) {
  ?>
  <title><?php echo $dataTampil[1];?> - Satuan Inventory</title>

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
         Data Master Inventory - Satuan
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
              <h3 class="box-title">Form Edit & List Data Satuan</h3>
			            <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <div class="col-md-12">

				<form action = "backend/p_e_satuan" method = "post">

			  <div class="alert alert-info alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-info"></i> Informasi !</h4>
                DISINI ANDA DIPERBOLEHKAN UNTUK MENAMBAH, MENGUPDATE DAN MENGHAPUS DATA SATUAN
              </div>

              <?php
              include 'config/koneksi.php';
              $id = $_GET['nokonter'];
              $data = mysqli_query($koneksi_inv,"SELECT * FROM ms_satuan WHERE `nokonter` = '$id'");
              $d = mysqli_fetch_array($data);
                ?>

			<div class="col-md-4">
                      <label>Nama Satuan</label>
                      <input type="hidden"  name='nokonter' class='form-control' value = "<?php echo $d['nokonter'];?>" >
                      <input type="text" class="form-control" name = "satuan" maxlength = "5"  value = "<?php echo $d['satuan'];?>" required>
                      <input type="hidden" value = "<?php echo $_SESSION['username'];?>" class='form-control' name='kduser' readonly>
                                     <?php
                              date_default_timezone_set('Asia/Jakarta');
                              $tgl = date('Y-m-d');
                              ?>
                              <input type="hidden" value = "<?php echo $tgl;?>" class='form-control' name='tglentry' readonly>

                      <br>
                      			<div class = "pull-right">
                            <a href = "_ms_satuan"><input type = "button" value = "Kembali" class = "btn btn-warning" ></input></a>
                      			<input type = "reset" value = "Reset" class = "btn btn-danger" ></input>
                      			   <input type = "submit" id = "simpan" name = "simpan"  value = "Simpan" class = "btn btn-info" ></input>
                      			   </div>
             </div>



	</form>

  <div class="col-md-8">
    				              <table id="example2" class=" table table-bordered table-striped display nowrap" style="width:100%">
                    <thead>
                    <tr>
                     <th>No</th>
                     <th>Satuan</th>
                     <th>User Entry</th>
                     <th>Tgl Entry</th>
                     <th>Action </th>
                    </tr>
                    </thead>

                    <tbody>
    	<?php
    	include "config/koneksi.php";
      $no = 0;
      $query = mysqli_query($koneksi_inv,"SELECT * FROM ms_satuan")or die(mysqli_error($koneksi_inv));
      while ($d = mysqli_fetch_array($query)) {
        $no++
        ?>
    					<tr>
    					<td><?php echo $no; ?></td>
    					<td><button type= 'button' class= 'btn bg-maroon btn-flat'><?php echo $d[1];?></td>
              <td><?php echo $d[2];?></td>
              <td><?php echo $d[3];?></td>

    					<td>
    				<a href = "_edit_ms_satuan?nokonter=<?php echo $d[0]; ?>"   <button type="button"  class="btn btn-primary btn-s" title = "Edit"><i class="fa fa-edit"></i></button></a>

    					</td>



    					</tr>
    									<?php } ?>
                    </tbody>

                    <tfoot>
                    <tr>
                      <th>No</th>
                      <th>Satuan</th>
                      <th>User Entry</th>
                      <th>Tgl Entry</th>
                      <th>Action </th>
                    </tr>
                    </tfoot>
                  </table>
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

<!-- ./wrapper -->

<?php include 'config/footer.php'; ?>

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
