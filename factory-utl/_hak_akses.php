<!DOCTYPE html>

<?php include 'config/head.php'; ?>
<?php
include "config/koneksi.php";
$query = mysqli_query($koneksi_utl,"select * from profile");
while ($dataTampil = mysqli_fetch_array($query)) {
  ?>
  <title><?php echo $dataTampil[1];?> - Hak Akses</title>

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

<body class="hold-transition skin-blue sidebar-mini">
<?php include 'config/aside.php'; ?>
<?php
include "config/koneksi.php";
$query = mysqli_query($koneksi_utl,"select * from fct_akses");
$dataTampil = mysqli_fetch_array($query);
  ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tambah Hak Akses Baru
        <small><?php echo $dataTampil['username'];?></small>
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
	  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">
                Lihat Status Login
              </button>

			          <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">List Status</h4>

              <div class="modal-body">
<table id="example4" class=" table table-bordered table-striped">

<tr><th>No</th><th>Username</th><th>Tanggal Login</th><th>Jam Login</th><th>Jam Logout</th><th>Status</th></tr>
<?php
include 'config/koneksi.php';
   $sql = mysqli_query($koneksi_utl,"SELECT * FROM log_session ORDER BY id DESC");
   $id=1;
   while($d=mysqli_fetch_array($sql))
     {
      echo "<tr><td align=center>$id</td>
                 <td align=center>$d[username]</td>
                 <td align=center>$d[tanggal]</td>
                 <td align=center>$d[jamin]</td>
                 <td align=center>$d[jamout]</td>";
      if($d['status']=='offline')
      {
      echo"<td style='background-color:red' align=center>OFFLINE</td>";
      }
      else
      {
      echo"<td style='background-color:lightgreen' align=center>ONLINE</td>";
      }
     echo"</tr>";
      $id++;
     }
echo "</table>";
?>
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <a href = "backend/p_d_log.php" onclick="return confirm('Apakah anda yakin untuk menghapus log session ?')"<button type="button" class="btn btn-danger">Delete History</button></a>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
		</div>

    </section>

        <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-6">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Form Tambah Hak Akses Baru</h3>
			            <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <div class="col-md-12">


				<form action = "backend/p_t_hakakses.php" method = "post">

			  <div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-warning"></i> Perhatikan !</h4>
                TOLONG ISI HAK AKSES DENGAN BENAR DAN CERMAT !
              </div>

              <div class="form-group">
                <label>Username</label>

				<div class="input-group">
				 <div class="input-group-addon">
                    <i class="fa fa-user"></i>
                  </div>
               <input type="text" class="form-control" required id = "username" name = "username" placeholder="Input Username.." >
              </div>
             </div>


			   <div class="form-group">
                <label>Password</label>
				<div class="input-group">
				 <div class="input-group-addon">
                    <i class="fa fa-key"></i>
					</div>
               <input type="password" class="form-control" required id = "password" name = "password" placeholder="Input Password..." >
              </div>
              </div>

              <div class="form-group">
                     <label>Group</label>
             <div class="input-group">
              <div class="input-group-addon">
                         <i class="fa fa-group"></i>
               </div>
                    <select class="form-control select2" name="group">
                      <option value="">-- Pilih Group Aksess --</option> <!-- INI default -->
                      <option value="Admin">Admin</option>
                      <option value="Inventory">Inventory</option>
                      <option value="Kasir">Kasir</option>
                      <option value="Supplier">Supplier</option>

                    </select>
                   </div>
                   </div>



			   <!-- /.form-group -->
			   <div class = "pull-right">
			   <input type = "submit" id = "simpan" name = "simpan"  value = "Simpan" class = "btn btn-info" ></input>
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

	        <div class="row">
        <div class="col-xs-6">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Data Tampil Hak Akses</h3>
			            <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

				              <table id="example2" class=" table table-bordered table-striped display nowrap" style="width:100%">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Username </th>
                  <th>Password </th>
                  <th>Group </th>
                  <th>Action </th>
                </tr>
                </thead>

                <tbody>
	<?php
	include "config/koneksi.php";
  $no = 0;
  $query = mysqli_query($koneksi_utl,"select * from fct_akses");
  while ($dataTampil = mysqli_fetch_array($query)) {
    $no++
    ?>
					<tr>
					<td><?php echo $no; ?></td>
					<td><?php echo $dataTampil['username'];?></td>
					<td><?php echo addslashes(sha1(md5(md5(sha1(md5(sha1($dataTampil['password'])))))));?></td>
          <td><?php echo $dataTampil['group'];?></td>


					<td>
				<a href="backend/p_d_hakakses.php?kd_user=<?php echo $dataTampil[0]; ?>" onclick="return confirm('Apakah anda yakin untuk menghapus : <?php echo $dataTampil[1];?> ?')"<button type="button"  class="btn btn-danger btn-m"><i class="fa fa-trash"></i></button></a>

					</td>



					</tr>
									<?php } ?>
                </tbody>

                <tfoot>
                <tr>
                  <th>No</th>
                  <th>Username </th>
                  <th>Password </th>
                  <th>Action </th>
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


    </section>
    <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->


<!-- ./wrapper -->

<?php include 'config/footer.php'; ?>


</body>
</html>

<?php } ?>
