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
 left: 21%;
}
</style>

<?php
include 'config/koneksi.php';
$id = $_GET['kodeitem'];
$data = mysqli_query($koneksi_inv,"SELECT * FROM ms_inmst1 WHERE `kodeitem` = '$id'");
$d = mysqli_fetch_array($data);

$data2 = mysqli_query($koneksi_inv,"SELECT * FROM ms_inmst2 WHERE `kodeitem` = '$id'");
$do = mysqli_fetch_array($data2);
  ?>


        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Informasi Inventory | kode item <i><u> <?php echo $id; ?></i></u></h4>
            </div>
            <div class="modal-body ">
      <div class ="row">

    <form action = "backend/p_e_inventory" method="post">
      <div class="col-xs-12">
        <div class="box">
          <!-- /.box-header -->
          <div class="box-body">
          <div class="col-md-12">

      <div class = "col-md-6">
        <div class="alert alert-info alert-dismissible">
                <h4><i class="icon fa fa-info"></i> INFO GUDANG 1</h4>
                Bila Qty di gd 01 dan gd 02 <b><u>tidak</u></b> “ 0 “ maka satuan tidak dapat dirubah !
              </div>
      </div>

      <div class = "col-md-6">
        <div class="alert alert-info alert-dismissible">
                <h4><i class="icon fa fa-info"></i> INFO GUDANG 2</h4>
                Bila Qty di gd 01 dan gd 02 <b><u>tidak</u></b> “ 0 “ maka satuan tidak dapat dirubah !
              </div>
      </div>

              <div class="col-md-3">
                              <label>Kode Item</label>
                              <div class="form-group">
                                <input type="hidden" class="form-control" name = "kodeitem" value="<?php echo $d['kodeitem']; ?>">
                               <input type="text" class="form-control" name = "kodeitem" value="<?php echo $d['kodeitem']; ?>" readonly >
                             </div>
                     </div>

                     <div class="col-md-3">
                                     <label>Kategori</label>
                                     <div class="form-group">
                                     <?php
                                include 'config/koneksi.php';
                                $result = mysqli_query($koneksi_inv,"SELECT * FROM ms_kategori ");
                        echo '

                       <select name="kategori1" class = "form-control select2" required id="kategori1" >';
                       echo '<option value="'.$d['kategori'].'">'.$d['kategori'].'</option>';
                       while ($row = mysqli_fetch_array($result)) {
                       echo '<option value="'.$row['kategori'].'">'.$row['kategori'].' - '.$row['ket'].'</option>';
                       }
                       echo '</select>';
                       ?>
                     </div>
                  </div>


                  <div class="col-md-3">
                                  <label>Kode Item</label>
                                  <div class="form-group">
                                    <input type="hidden" class="form-control" name = "kodeitem" value="<?php echo $do['kodeitem']; ?>">
                                   <input type="text" class="form-control" name = "kodeitem" value="<?php echo $do['kodeitem']; ?>" readonly >
                                 </div>
                         </div>

                         <div class="col-md-3">
                                         <label>Kategori</label>
                                         <div class="form-group">
                                         <?php
                                    include 'config/koneksi.php';
                                    $result = mysqli_query($koneksi_inv,"SELECT * FROM ms_kategori ");
                            echo '

                           <select name="kategori2" class = "form-control select2" required id="kategori2" >';
                           echo '<option value="'.$do['kategori'].'">'.$do['kategori'].'</option>';
                           while ($row = mysqli_fetch_array($result)) {
                           echo '<option value="'.$row['kategori'].'">'.$row['kategori'].' - '.$row['ket'].'</option>';
                           }
                           echo '</select>';
                           ?>
                         </div>
                      </div>


                      <div class="col-md-6">
                                      <label>Nama Item</label>
                                      <div class="form-group">
                                       <input type="text" class="form-control" name = "namabrg" required value="<?php echo $d['namabrg']; ?>" >
                                     </div>
                             </div>

                             <div class="col-md-6">
                                             <label>Nama Item</label>
                                             <div class="form-group">
                                              <input type="text" class="form-control" name = "namabrg" required value="<?php echo $d['namabrg']; ?>" >
                                            </div>
                                    </div>

                                    <div class="col-md-3">
                                                    <label>Kode Gudang</label>
                                                    <div class="form-group">
                                                     <input type="text" class="form-control" name = "kdgudang1" value="<?php echo $d['kdgudang']; ?>" readonly >
                                                   </div>
                                           </div>

                                           <div class="col-md-3">
                                               <label>Kd Rack</label>
                                               <div class="form-group">
                                               <?php
                                          include 'config/koneksi.php';
                                          $result = mysqli_query($koneksi_inv,"SELECT * FROM ms_rack ");
                                  echo '

                                 <select name="kdrak1" class = "form-control select2" required id="kdrak1" >';
                                 echo '<option value="'.$d['kdrak'].'">'.$d['kdrak'].'</option>';
                                 while ($row = mysqli_fetch_array($result)) {
                                 echo '<option value="'.$row['kdrak'].'">'.$row['kdrak'].'</option>';
                                 }
                                 echo '</select>';
                                 ?>
                                 </div>
                                           </div>

                                           <div class="col-md-3">
                                                           <label>Kode Gudang </label>
                                                           <div class="form-group">
                                                            <input type="text" class="form-control" name = "kdgudang2" value="<?php echo $do['kdgudang']; ?>" readonly >
                                                          </div>
                                                  </div>




                  <div class="col-md-3">
                      <label>Kd Rack</label>
                      <div class="form-group">
                      <?php
                 include 'config/koneksi.php';
                 $result = mysqli_query($koneksi_inv,"SELECT * FROM ms_rack ");
         echo '

        <select name="kdrak2" class = "form-control select2" required id="kdrak2" >';
      echo '<option value="'.$do['kdrak'].'">'.$do['kdrak'].'</option>';
        while ($row = mysqli_fetch_array($result)) {
        echo '<option value="'.$row['kdrak'].'">'.$row['kdrak'].'</option>';
        }
        echo '</select>';
        ?>
        </div>
                  </div>

                  <div class="col-md-3">
                                  <label>Qty </label>
                                  <div class="form-group">
                                   <input type="text" class="form-control" name = "qty" value="<?php echo $d['qty']; ?>" readonly >
                                 </div>
                         </div>



                  <div class="col-md-3">
                      <label>Satuan</label>
                      <div class="form-group">
                        <?php
                   include 'config/koneksi.php';
                   $result = mysqli_query($koneksi_inv,"SELECT * FROM ms_satuan ");
           echo '

          <select name="satuan1" class = "form-control select2" required id="satuan1" >';
          if ($d['qty'] != 0) {
            echo '<option value="'.$d['satuan'].'">'.$d['satuan'].'</option>';
          }else {
            while ($row = mysqli_fetch_array($result)) {
            echo '<option value="'.$row['satuan'].'">'.$row['satuan'].'</option>';
            }
          }
          echo '</select>';
          ?>
                     </div>
                  </div>

                  <div class="col-md-3">
                                  <label>Qty </label>
                                  <div class="form-group">
                                   <input type="text" class="form-control" name = "qty" value="<?php echo $d['qty']; ?>" readonly >
                                 </div>
                         </div>



                  <div class="col-md-3">
                      <label>Satuan</label>
                      <div class="form-group">
                        <?php
                   include 'config/koneksi.php';
                   $result = mysqli_query($koneksi_inv,"SELECT * FROM ms_satuan ");
           echo '

          <select name="satuan2" class = "form-control select2" required id="satuan2" >';
          if ($d['qty'] != 0) {
            echo '<option value="'.$do['satuan'].'">'.$do['satuan'].'</option>';
          }else {
            while ($row = mysqli_fetch_array($result)) {
            echo '<option value="'.$row['satuan'].'">'.$row['satuan'].'</option>';
            }
          }
          echo '</select>';
          ?>
                     </div>
                  </div>

                  <div class="col-md-3">
                      <label>Max Inv</label>
                      <div class="form-group">
                       <input type="number" min = "0" class="form-control" name = "mip1" value="<?php echo $d['mip']; ?>" >
                     </div>
                  </div>

                  <div class="col-md-3">
                      <label>Min Inv</label>
                      <div class="form-group">
                       <input type="number" min = "0" class="form-control" name = "min1" value="<?php echo $d['min']; ?>" >
                     </div>
                  </div>



                  <div class="col-md-3">
                      <label>Max Inv</label>
                      <div class="form-group">
                       <input type="number" min = "0" class="form-control" name = "mip2" value="<?php echo $do['mip']; ?>" >
                     </div>
                  </div>

                  <div class="col-md-3">
                      <label>Min Inv</label>
                      <div class="form-group">
                       <input type="number" min = "0" class="form-control" name = "min2"  value="<?php echo $d['min']; ?>" >
                     </div>
                  </div>

                  <div class="col-md-12">
                      <div class="form-group">
                        <input type="hidden" value = "<?php echo $_SESSION['username'];?>" class='form-control' name='kduser' readonly>
                         <?php
                  date_default_timezone_set('Asia/Jakarta');
                  $tgl = date('Y-m-d');
                  ?>
                  <input type="hidden" value = "<?php echo $tgl;?>" class='form-control' name='tglentry' readonly>
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
