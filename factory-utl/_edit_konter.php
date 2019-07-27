<!DOCTYPE html>

<?php include 'config/head.php'; ?>
<?php
include "config/koneksi.php";
$query = mysqli_query($koneksi,"select * from company");
while ($dataTampil = mysqli_fetch_array($query)) {
  ?>
  <title><?php echo $dataTampil['nama'];?> - Settings Counter</title>

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
$query = mysqli_query($koneksi,"select * from company");
while ($dataTampil = mysqli_fetch_array($query)) {
  ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Settings
        <small><?php echo $dataTampil['nama'];?></small>
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

    </section>

        <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-6">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Form Settings</h3>
			            <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <div class="col-md-12">


				<form action = "backend/p_e_konter.php" method = "post">

			  <div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-warning"></i> Perhatikan !</h4>
                TOLONG ISI DENGAN BENAR DAN CERMAT !
              </div>

              <?php
              include 'config/koneksi.php';
              $id = $_GET['key'];
              $data = mysqli_query($koneksi,"SELECT * FROM tbl_counter WHERE `key` = '$id'");
              $d = mysqli_fetch_array($data);
                ?>

                <div class="form-group">
                  <label>Kode Asset</label>

  				<div class="input-group">
  				 <div class="input-group-addon">
                      <i class="fa fa-key"></i>
                    </div>
                    <input type="hidden" class="form-control" readonly id = "key"  name = "key" value = "<?php echo $d[0];?>" >
                 <input type="text" class="form-control" required name = "kd_asset" value="<?php echo $d[1]; ?>" >
                </div>
               </div>


  			   <div class="form-group">
                  <label>Konter Asset</label>
  				<div class="input-group">
  				 <div class="input-group-addon">
                      <i class="fa fa-lock"></i>
  					</div>
                 <input type="number" class="form-control" required name = "counter_asset" value="<?php echo $d[2]; ?>" >
                </div>
                </div>



			   <!-- /.form-group -->
			   <div class = "pull-right">
           <a href="_konter.php"><input type = "button" value = "Kembali" class = "btn btn-warning" ></input></a>
         <input type = "submit" id = "simpan" name = "simpan"  value = "Simpan" class = "btn btn-info" ></input>
			   </div>
	</form>
<?php } ?>

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

  </div>
  <!-- /.content-wrapper -->


<!-- ./wrapper -->

<?php include 'config/footer.php'; ?>


</body>
</html>

<?php } ?>
