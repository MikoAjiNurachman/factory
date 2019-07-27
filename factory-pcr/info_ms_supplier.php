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
$id = $_GET['kodesup']; //get the no which will updated
$query = mysqli_query($koneksi_pcr,"SELECT * FROM apmst WHERE kodesup = '$id'"); //get the data that will be updated
while($data = mysqli_fetch_assoc($query)){
  $kodesup = $data['kodesup'];
  $namasup = $data['namasup'];

  $kota = $data['kota'];
  $kodepos = $data['kodepos'];
  $pkp = $data['pkp'];
  $hp = $data['hp'];
  $contactname = $data['contactname'];
  $email = $data['email'];

  $kredit = $data['kredit'];
  $top = $data['top'];
  $saldoawal = $data['saldoawal'];
  $saldojln = $data['saldojln'];

  $tglbeliakhir = $data['tglbeliakhir'];

  $kduser = $data['kodeuser'];
  $tglentry = $data['tglentry'];

}
?>


          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Informasi Supplier | Kode Sup <i><u> <?php echo $kodesup;?></i></u></h4>
              </div>
              <div class="modal-body ">
			  <div class ="row">
          <div class="col-xs-12">
            <div class="box">
              <!-- /.box-header -->
              <div class="box-body">
              <div class="col-md-12">


            <div class = "col-xs-3">
              <label>Nama Supplier </label>
                        <p><?php echo $namasup;?></p>
              <br>
            </div>

            <div class = "col-xs-3">
             <label>Kota</label>
                        <p><?php echo $kota;?></p>
             <br>
            </div>

            <div class = "col-xs-3">
            <label>Kodepos</label>
                      <p><?php echo $kodepos;?></p>
            <br>
            </div>


            <div class = "col-xs-12"></div>

            <div class = "col-xs-3">

             <label>No Hp</label>
                       <p><?php echo $hp;?></p>
             <br>
            </div>

            <div class = "col-xs-3">

              <label>Contactname</label>
                        <p><?php echo $contactname;?></p>
              <br><br>
            </div>

            <div class = "col-xs-3">

              <label>Email</label>
                        <p><?php echo $email;?></p>
              <br>
            </div>

            <div class = "col-xs-3">

              <label>Kredit</label>
                        <p><?php echo $kredit;?></p>
              <br>
            </div>

            <div class = "col-xs-12"></div>

            <div class = "col-xs-3">

             <label>PKP</label>
                       <p><?php echo $pkp;?></p>
             <br>
            </div>

            <div class = "col-xs-3">

              <label>TOP</label>
                        <p><?php echo $top;?></p>
              <br>
            </div>

            <div class = "col-xs-3">

              <label>Saldo Awal</label>
                        <p><?php echo $saldoawal;?></p>
              <br>
            </div>

            <div class = "col-xs-3">

              <label>Saldo Jln</label>
                        <p><?php echo $saldojln;?></p>
              <br>
            </div>

            <div class = "col-xs-12"></div>

            <div class = "col-xs-3">

             <label>Tgl Beli Akhir</label>
                       <p><?php echo $tglbeliakhir;?></p>
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
