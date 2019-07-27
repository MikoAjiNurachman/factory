<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<!-- Bootstrap 3.3.7 -->
<link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css">
<!-- Font Awesome -->
<link rel="stylesheet" href="/bower_components/font-awesome/css/font-awesome.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="/bower_components/Ionicons/css/ionicons.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="/dist/css/AdminLTE.min.css">
<!-- AdminLTE Skins. Choose a skin from the css/skins
     folder instead of downloading all of them to reduce the load. -->
<link rel="stylesheet" href="/dist/css/skins/_all-skins.min.css">

<style>
.modal-dialog {
    width: 60%;
    height: 50%;
    padding: 0;
    margin:0;
    position: relative;
 top: 5%;
 left: 23%;
}
</style>

<?php
include 'config/koneksi.php';
$id = $_GET['kodesup'];
$data = mysqli_query($koneksi_pcr,"SELECT * FROM apmst WHERE kodesup = '$id'");
$d = mysqli_fetch_array($data);

  ?>


        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Edit Supplier | Kode Sup <i><u> <?php echo $id; ?></i></u></h4>
            </div>
            <div class="modal-body ">
      <div class ="row">

    <form action = "backend/p_e_supplier.php" method="post">
      <div class="col-xs-12">
        <div class="box">
          <!-- /.box-header -->
          <div class="box-body">
          <div class="col-md-12">

            <div class = "col-md-12">
              <div class="alert alert-info alert-dismissible">
                      <h4><i class="icon fa fa-info"></i> EDIT SUPPLIER</h4>
                      Perhatikan ! inputkan dengan teliti dan cermat
                    </div>
            </div>

            <div class="col-md-6">
                          <div class="form-group">
                            <label>Kode Supplier</label>

                            <?php include "config/kode_otomatis.php";  ?>

                    <div class="input-group">
                     <div class="input-group-addon">
                                <i class="fa fa-key"></i>
                              </div>
                              <input type="hidden" class="form-control" name = "kodesup" value="<?php echo $d['kodesup'];; ?>" >
                           <input type="text" class="form-control" name = "kodesup" value="<?php echo $d['kodesup'];; ?>" readonly >
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
                           <input type="text" class="form-control" name = "kota" value="<?php echo $d['kota']; ?>" >
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
                           <input type="text" class="form-control"   name = "kodepos" value="<?php echo $d['kodepos']; ?>" >
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
                           <input type="text" class="form-control"   name = "namasup" value="<?php echo $d['namasup']; ?>" required >
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
                           <input type="text" class="form-control" data-inputmask='"mask": "(999) 999-999-9999"' data-mask  name = "telp" value="<?php echo $d['telp']; ?>" >
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
                                      <input type="text" class="form-control"   name = "alamat1" value = "<?php echo $d['alamat1'];?>" >
                                      <input type="text" class="form-control"   name = "alamat2" value = "<?php echo $d['alamat2'];?>" >
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
                                                 <input type="text" class="form-control" data-inputmask='"mask": "(999) 999-999-9999"' data-mask name = "hp" value="<?php echo $d['hp']; ?>"  >
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
                                                            <input type="email" class="form-control" name = "email" value="<?php echo $d['email']; ?>" >
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
                                                            <input type="text" class="form-control"   name = "contactname" value="<?php echo $d['contactname']; ?>"  >
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
                <option value="<?php echo $d['pkp']; ?>" selected><?php echo $d['pkp']; ?></option>
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
                                                                       <input type="text" class="form-control"   name = "kredit" id = "kredit" value="<?php echo $d['kredit']; ?>"  >
                                                                      </div>
                                                                     </div>
                                                                   </div>

                                                                   <div class="col-md-2">
                                                                     <div class="form-group">
                                                                                   <label id="top_t">TOP </label>


                                                                                  <input type="text" class="form-control"  id="top" name = "top" value="<?php echo $d['top']; ?>" />
                                                                                  <input type="hidden" value = "<?php echo $_SESSION['username'];?>" class='form-control' name='kduser' readonly>
                                                                                                 <?php
                                                                                          date_default_timezone_set('Asia/Jakarta');
                                                                                          $tgl = date('Y-m-d');
                                                                                          ?>
                                                                                          <input type="hidden" value = "<?php echo $tgl;?>" class='form-control' name='tglentry' readonly>
                                                                                </div>
                                                                              </div>

<div class="col-md-6"></div>
        </div>
        <!-- /.box-body -->
      </div>
              <!-- /.akhir -->

              <!-- /.box -->

              <!-- /.box -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->


            <div class="modal-footer">
              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
              <input type = "reset" value = "Reset" class = "btn btn-danger" ></input>
              <input type = "submit" id = "simpan" name = "simpan"  value = "Simpan" class = "btn btn-info" ></input>
            </div>
          </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
<!-- jQuery 3 -->
<script src="/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/dist/js/demo.js"></script>

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
