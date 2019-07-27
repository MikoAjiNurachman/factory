<!DOCTYPE html>
<?php include 'config/head.php'; ?>
<?php
include "config/koneksi.php";
$query = mysqli_query($koneksi_utl,"SELECT * FROM profile");
while ($dataTampil = mysqli_fetch_array($query)) {
  ?>
  <title><?php echo $dataTampil[1];?> - Setup Profile</title>

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
$query = mysqli_query($koneksi_utl,"select * from profile");
while ($dataTampil = mysqli_fetch_array($query)) {
  ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Settings Setup Profile
        <small><?php echo $dataTampil['namacbg'];?></small>
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
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Form Setup Profile</h3>
			            <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <div class="col-md-12">


			  <div class="alert alert-info alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-info"></i> Information !</h4>
                PASTIKAN DATA PROFILE SUDAH BENAR
              </div>


<div class="col-md-6">
              <div class="form-group">
                <label>Kode Cabang</label>

				<div class="input-group">
				 <div class="input-group-addon">
                    <i class="fa fa-key"></i>
                  </div>
               <input type="text" class="form-control" readonly value = "<?php echo $dataTampil['kodecbg'];?>" >
              </div>
             </div>
</div>

<div class="col-md-3">
  <div class="form-group">
                <label>Kota</label>

        <div class="input-group">
         <div class="input-group-addon">
                    <i class="fa fa-home"></i>
                  </div>
               <input type="text" class="form-control" readonly value = "<?php echo $dataTampil['kota'];?>" >
              </div>
             </div>
</div>

<div class="col-md-3">
  <div class="form-group">
                <label>Kode Pos</label>

        <div class="input-group">
         <div class="input-group-addon">
                    <i class="fa fa-flag"></i>
                  </div>
               <input type="text" class="form-control" readonly value = "<?php echo $dataTampil['kdpos'];?>" >
              </div>
             </div>
</div>


<div class="col-md-6">
  <div class="form-group">
                <label>Nama Cabang</label>

				<div class="input-group">
				 <div class="input-group-addon">
                    <i class="fa fa-building"></i>
                  </div>
               <input type="text" class="form-control" readonly value = "<?php echo $dataTampil['namacbg'];?>" >
              </div>
             </div>
           </div>

<div class="col-md-6">
  <div class="form-group">
                <label>No Telp</label>

				<div class="input-group">
				 <div class="input-group-addon">
                    <i class="fa fa-phone"></i>
                  </div>
               <input type="text" class="form-control" readonly  value = "<?php echo $dataTampil['notelp'];?>" >
              </div>
             </div>
           </div>

           <div class="col-md-6">
                           <div class="form-group">
                           <label>Alamat</label>

           				<div class="input-group">
           				 <div class="input-group-addon">
                               <i class="fa fa-map"></i>
                             </div>
                          <input type="text" class="form-control" readonly value = "<?php echo $dataTampil['alamat1'];?>" >
                          <input type="text" class="form-control" readonly  value = "<?php echo $dataTampil['alamat2'];?>" >
                         </div>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                                      <label>No HP</label>

                      				<div class="input-group">
                      				 <div class="input-group-addon">
                                          <i class="fa fa-mobile"></i>
                                        </div>
                                     <input type="text" class="form-control" readonly  value = "<?php echo $dataTampil['nohp'];?>" >
                                    </div>
                                   </div>
                                 </div>

                                 <div class="col-md-6">
                                   <div class="form-group">
                                                 <label>Cheif Store </label>

                                 				<div class="input-group">
                                 				 <div class="input-group-addon">
                                                     <i class="fa fa-user"></i>
                                                   </div>
                                                <input type="text" class="form-control" readonly  value = "<?php echo $dataTampil['chstore'];?>" >
                                               </div>
                                              </div>
                                            </div>
<div class="col-md-6"></div>
                                            <div class="col-md-6">
                                              <center>
                                              <div class="form-group">
                                                            <label> Photo Logo </label>
                                                            <style media="screen">
                                                            .circular-image {
                                                              overflow: hidden;
                                                              border-radius: 50%;
                                                            }
                                                            </style>
                                                            <br>

                                                            <img src="logo/<?php echo $dataTampil['logo']; ?>" class="circular-image" width="40%" height="40%"/>
                                                         </div>
                                                       </center>
                                                       </div>
<div class="col-md-6"></div>


			   <!-- /.form-group -->
			   <div class = "pull-right">
			   <a href = "_edit_profile.php?kodecbg=<?php echo $dataTampil[0]; ?>"   <button type="button"  class="btn btn-primary btn-s" title = "Edit">Edit Data</button></a>
			   </div>
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
