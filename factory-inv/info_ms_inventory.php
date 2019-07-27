  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">


  <?php
include 'config/koneksi.php';
$id = $_GET['kodeitem']; //get the no which will updated
$query = mysqli_query($koneksi_inv,"SELECT * FROM `ms_inmst1` WHERE kodeitem = '$id'"); //get the data that will be updated
while($data = mysqli_fetch_assoc($query)){
  $kodeitem = $data['kodeitem'];
  $namabrg = $data['namabrg'];
  $kategori = $data['kategori'];
  $qty = $data['qty'];
  $hrg_beli_akhir = $data['hrg_beli_akhir'];
  $tgl_beli_akhir = $data['tgl_beli_akhir'];
  $saldoawal = $data['saldo_awal'];
  $jml_saldo_awal = $data['jml_saldo_awal'];

  $kdgudang = $data['kdgudang'];
  $kdrak = $data['kdrak'];
  $satuan = $data['satuan'];

  $hpp = $data['hpp'];
  $po = $data['po'];
  $so = $data['so'];
  $mip = $data['mip'];
  $min = $data['min'];

  $kduser = $data['kduser'];
  $tglentry = $data['tglentry'];

}
?>


          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Informasi Inventory | kode item <i><u> <?php echo $kodeitem;?></i></u></h4>
              </div>
              <div class="modal-body ">
			  <div class ="row">
          <div class="col-xs-12">
            <div class="box">
              <!-- /.box-header -->
              <div class="box-body">
              <div class="col-md-12">


            <div class = "col-xs-3">
              <label>Kategori </label>
                        <p><?php echo $kategori;?></p>
              <br>
            </div>

            <div class = "col-xs-3">
             <label>Qty</label>
                        <p><?php echo $qty;?></p>
             <br>
            </div>

            <div class = "col-xs-3">
            <label>Satuan</label>
                      <p><?php echo $satuan;?></p>
            <br>
            </div>


            <div class = "col-xs-12"></div>

            <div class = "col-xs-3">

             <label>Harga Beli Akhir</label>
                       <p><?php echo $hrg_beli_akhir;?></p>
             <br>
            </div>

            <div class = "col-xs-3">

              <label>Tgl Beli Akhir</label>
                        <p><?php echo $tgl_beli_akhir;?></p>
              <br><br>
            </div>

            <div class = "col-xs-3">

              <label>Saldo Awal</label>
                        <p><?php echo $saldoawal;?></p>
              <br>
            </div>

            <div class = "col-xs-3">

              <label>Jml Saldo Awal</label>
                        <p><?php echo $jml_saldo_awal;?></p>
              <br>
            </div>

            <div class = "col-xs-12"></div>

            <div class = "col-xs-3">

             <label>Hpp</label>
                       <p><?php echo $hrg_beli_akhir;?></p>
             <br>
            </div>

            <div class = "col-xs-3">

              <label>Mip</label>
                        <p><?php echo $mip;?></p>
              <br>
            </div>

            <div class = "col-xs-3">

              <label>Min</label>
                        <p><?php echo $min;?></p>
              <br>
            </div>

            <div class = "col-xs-3">

              <label>Po</label>
                        <p><?php echo $po;?></p>
              <br>
            </div>

            <div class = "col-xs-12"></div>

            <div class = "col-xs-3">

             <label>So</label>
                       <p><?php echo $so;?></p>
             <br>
            </div>

            <div class = "col-xs-3">

              <label>Kd User</label>
                        <p><?php echo $kduser;?></p>
              <br>
            </div>

            <div class = "col-xs-3">

              <label>Tgl Entry</label>
                        <p><?php echo $tglentry;?></p>
              <br>
            </div>





            <div class="col-xs-12"></div>
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
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
