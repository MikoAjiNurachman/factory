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
         Data Master Supplier - Procucrement
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
              <h3 class="box-title">Form Tambah & List Data Supplier</h3>
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
                DISINI ANDA DIPERBOLEHKAN UNTUK MENCARI, MENAMBAH, MENGUPDATE DAN MENGHAPUS DATA SUPPLIER
              </div>


              <form action = "backend/p_t_supplier" method = "post">


                <div class="col-md-6">
                              <div class="form-group">
                                <label>Kode Supplier</label>

                                <?php include "config/kode_otomatis.php";  ?>

                        <div class="input-group">
                         <div class="input-group-addon">
                                    <i class="fa fa-key"></i>
                                  </div>
                               <input type="text" class="form-control" name = "kodesup" value="<?php echo $newID; ?>" readonly >
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
                               <input type="text" class="form-control"   name = "kota"  >
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
                               <input type="text" class="form-control"   name = "kodepos"  >
                              </div>
                             </div>
                </div>


                <div class="col-md-6">
                  <div class="form-group">
                                <label>Nama Supplier</label>

                        <div class="input-group">
                         <div class="input-group-addon">
                                    <i class="fa fa-building"></i>
                                  </div>
                               <input type="text" class="form-control"   name = "namasup" required >
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
                               <input type="text" class="form-control" data-inputmask='"mask": "(999) 999-999-9999"' data-mask  name = "telp" >
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
                                                     <input type="text" class="form-control" data-inputmask='"mask": "(999) 999-999-9999"' data-mask name = "hp"  >
                                                    </div>
                                                   </div>
                                                 </div>



                                                 <div class="col-md-6">
                                                   <div class="form-group">
                                                                 <label>E-mail address</label>

                                                         <div class="input-group">
                                                          <div class="input-group-addon">
                                                                     <i class="fa fa-envelope-o"></i>
                                                                   </div>
                                                                <input type="email" class="form-control" name = "email"  >
                                                               </div>
                                                              </div>
                                                            </div>
<div class="col-md-6"></div>
                                                 <div class="col-md-6">
                                                   <div class="form-group">
                                                                 <label>Contact Person </label>

                                                        <div class="input-group">
                                                         <div class="input-group-addon">
                                                                     <i class="fa fa-whatsapp"></i>
                                                                   </div>
                                                                <input type="text" class="form-control"   name = "contactname"  >
                                                               </div>
                                                              </div>
                                                            </div>

<div class="col-md-6"></div>

  <div class="col-md-2">
  <div class="form-group">
                <label>PKP </label>

       <div class="input-group">
        <div class="input-group-addon">
                    <i class="fa fa-user"></i>
                  </div>
                  <select class="form-control" name="pkp" id="pkp">
                    <option value="Y">Y</option>
                    <option value="N">N</option>
                  </select>
              </div>
             </div>
           </div>
                                                            <div class="col-md-2">
                                                              <div class="form-group">
                                                                            <label>Kredit </label>

                                                                   <div class="input-group">
                                                                    <div class="input-group-addon">
                                                                                <i class="fa fa-user"></i>
                                                                              </div>
                                                                           <input type="text" class="form-control"   name = "kredit" id = "kredit"  >
                                                                          </div>
                                                                         </div>
                                                                       </div>

                                                                       <div class="col-md-2">
                                                                         <div class="form-group">
                                                                                       <label id="top_t">TOP </label>


                                                                                      <input type="text" class="form-control"  id="top" name = "top" />
                                                                                      <input type="hidden" value = "<?php echo $_SESSION['username'];?>" class='form-control' name='kduser' readonly>
                                                                                                     <?php
                                                                                              date_default_timezone_set('Asia/Jakarta');
                                                                                              $tgl = date('Y-m-d');
                                                                                              ?>
                                                                                              <input type="hidden" value = "<?php echo $tgl;?>" class='form-control' name='tglentry' readonly>
                                                                                    </div>
                                                                                  </div>

<div class="col-md-6"></div>


                <div class = "pull-right">
                  <a href = "_ms_supplier"><input type = "button" value = "Kembali" class = "btn btn-warning" ></input></a>
          			<input type = "reset" value = "Reset" class = "btn btn-danger" ></input>
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
      <!-- /.row -->

    </section>
    <!-- /.content -->
  <!-- /.content-wrapper -->
</div>

<!-- ./wrapper -->

<?php include 'config/footer.php'; ?>

<script type="text/javascript">
  $(window).load(function() {
    $('#pkp').change(function(){
      console.log($("#pkp option:selected").val());
        if ($("#pkp option:selected").val() == 'Y') {
          $('#top').attr("disabled", false);
          $('#top').attr("required", true);
        }else {
          $('#top').attr("disabled", true);
          $('#top').val("");
        }
    });
  });

</script>
</body>
</html>
<?php } ?>
