<!DOCTYPE html>
<?php include 'config/head.php'; ?>
<?php
include "config/koneksi.php";
$query = mysqli_query($koneksi_utl,"SELECT * FROM profile");
while ($dataTampil = mysqli_fetch_array($query)) {
  ?>
  <title><?php echo $dataTampil[1];?> - Edit Setup Profile</title>

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
        Settings Edit Setup Profile
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
              <h3 class="box-title">Form Edit Settings Setup Profile</h3>
			            <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <div class="col-md-12">


				<form action = "backend/p_e_profile.php" method = "post" enctype="multipart/form-data">

			  <div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-warning"></i> Perhatikan !</h4>
                PASTIKAN UKURAN FOTO 100 x 100 PIXELS, DAN PASTIKAN FILE UPLOAD FOTO SUDAH TERISI SEBELUM SIMPAN DATA
              </div>

              <?php
              include 'config/koneksi.php';
              $id = $_GET['kodecbg'];
              $data = mysqli_query($koneksi_utl,"SELECT * FROM profile WHERE `kodecbg` = '$id'");
              $d = mysqli_fetch_array($data);
                ?>

                <div class="col-md-6">
                              <div class="form-group">
                                <label>Kode Cabang</label>

                				<div class="input-group">
                				 <div class="input-group-addon">
                                    <i class="fa fa-key"></i>
                                  </div>
                               <input type="text" class="form-control"   name = "kodecbg" value = "<?php echo $dataTampil['kodecbg'];?>" >
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
                               <input type="text" class="form-control"   name = "kota" value = "<?php echo $dataTampil['kota'];?>" >
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
                               <input type="text" class="form-control"   name = "kdpos" value = "<?php echo $dataTampil['kdpos'];?>" >
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
                               <input type="text" class="form-control"   name = "namacbg" value = "<?php echo $dataTampil['namacbg'];?>" >
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
                               <input type="text" class="form-control" data-inputmask='"mask": "(999) 999-999-9999"' data-mask  name = "notelp" value = "<?php echo $dataTampil['notelp'];?>" >
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
                                          <input type="text" class="form-control"   name = "alamat1" value = "<?php echo $dataTampil['alamat1'];?>" >
                                          <input type="text" class="form-control"   name = "alamat2" value = "<?php echo $dataTampil['alamat2'];?>" >
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
                                                     <input type="text" class="form-control" data-inputmask='"mask": "(999) 999-999-9999"' data-mask name = "nohp" value = "<?php echo $dataTampil['nohp'];?>" >
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
                                                                <input type="text" class="form-control"   name = "chstore" value = "<?php echo $dataTampil['chstore'];?>" >
                                                               </div>
                                                              </div>
                                                            </div>
                <div class="col-md-6"></div>

                                                            <div class="col-md-6">
                                                              <div class="form-group">
                                                                <label for="exampleInputFile">Upload Photo Logo ( 100 x 100 px)</label>
                                                                <input type="file" class="form-control" id = "logo" name = "logo" >

                                                                <p class="help-block">File sebelumnya : <?php echo $dataTampil['logo'];?></p>
                                                              </div>
                                                                     </div>
                <div class="col-md-6"></div>

                <input type="hidden" value = "<?php echo $_SESSION['username'];?>" class='form-control' name='kduser' readonly>
                               <?php
                        date_default_timezone_set('Asia/Jakarta');
                        $tgl = date('Y-m-d');
                        ?>
                        <input type="hidden" value = "<?php echo $tgl;?>" class='form-control' name='tglentry' readonly>



			   <!-- /.form-group -->
			   <div class = "pull-right">
           <a href="_profile.php"><input type = "button" value = "Kembali" class = "btn btn-warning" ></input></a>
      <input type = "reset" value = "Reset" class = "btn btn-danger" ></input>
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
