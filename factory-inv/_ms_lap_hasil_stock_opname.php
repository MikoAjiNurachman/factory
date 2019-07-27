<!DOCTYPE html>
<?php include 'config/head.php'; ?>
<?php
include "config/koneksi.php";
$query = mysqli_query($koneksi_utl,"SELECT * FROM profile");
while ($dataTampil = mysqli_fetch_array($query)) {
  ?>
  <title><?php echo $dataTampil[1];?> - Inventory</title>

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
         Laporan Data Inventory Hasil Stock Opname by Kode Item
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
              <h3 class="box-title">Search Data Hasil Stock Opname Inventory by Kode Item</h3>
			            <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <div class="col-md-12">

				<form action = "_ex_lap_hasil_stock_opname" method = "post">

			  <div class="alert alert-info alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-info"></i> Informasi !</h4>
                DISINI ANDA DIPERBOLEHKAN UNTUK MENCARI
              </div>


              <div class="col-sm-1">
              <label>Kode Item</label>
              </div>
			<div class="col-xs-5">

                      <?php
                 include 'config/koneksi.php';
                 $result = mysqli_query($koneksi_inv,"SELECT * FROM ms_inmst1 "); //koneksi2 ini nantinya lookup dgn db_toko yg asli
         echo '

        <select name="satuan1" class = "form-control select2" required id="satuan1" >';
        echo '<option>Pilih Kode Item</option>';
        while ($row = mysqli_fetch_array($result)) {
        echo '<option value="'.$row['kodeitem'].'">'.$row['kodeitem'].'</option>';
        }
        echo '</select>';
        ?>
             </div>

<div class="col-xs-1">
<label>s.d</label>
</div>
<div class="col-xs-5">

                 <?php
            include 'config/koneksi.php';
            $result = mysqli_query($koneksi_inv,"SELECT * FROM ms_inmst1 "); //koneksi2 ini nantinya lookup dgn db_toko yg asli
    echo '

   <select name="satuan2" class = "form-control select2" required id="satuan2" >';
   echo '<option>Pilih Kode Item</option>';
   while ($row = mysqli_fetch_array($result)) {
   echo '<option value="'.$row['kodeitem'].'">'.$row['kodeitem'].'</option>';
   }
   echo '</select>';
   ?>
        </div>


                    <div class="col-sm-1">
                    <label>Nama Item</label>
                    </div>
                    <div class="col-md-5">
                            <div class="form-group">

                             <input type="text" class="form-control" name = "namabrg1" id=""  placeholder="Nama item..." >
                           </div>
                           </div>

      <div class="col-xs-1">
      <label>s.d</label>
      </div>
                   <div class="col-md-5">
                           <div class="form-group">

                            <input type="text" class="form-control" name = "namabrg2" id=""  placeholder="Nama item..." >
                          </div>
                          </div>
                    <div class = "col-md-1">
                    <div class="form-group">
                                   <?php
                            date_default_timezone_set('Asia/Jakarta');
                            $tgl = date('Y-m-d');
                            ?>
                              <input type="hidden" value = "<?php echo $_SESSION['username'];?>" class='form-control' name='kduser' readonly>
                                  <!-- /.input group -->
                                </div>
                               </div>
<br>

			<div class = "pull-right">
			<input type = "reset" value = "Reset" class = "btn btn-danger" ></input>
       <input type = "submit" id = "search" name = "search"  value = "Search" class = "btn btn-info" ></input>
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
      <script type="text/javascript">
      <?php echo $jsArray; ?>
      function changeValue(id){
      document.getElementById('umur').value = prdName[id].umur;
            document.getElementById('dm').value = prdName[id].dm;
            document.getElementById('rate').value = prdName[id].rate;
      };
      </script>

    </section>
    <!-- /.content -->
  <!-- /.content-wrapper -->
</div>

<!-- ./wrapper -->

<?php include 'config/footer.php'; ?>


<script type="text/javascript">
$(document).ready(function(){
$('a#_edit_ms_inventory').click(function(){
 var url = $(this).attr('href');
 $.ajax({
  url : url,
  success:function(response){
   $('#modal-info').html(response);
  }
 });
});

});
</script>

<script type="text/javascript">
$(document).ready(function(){
$('a#info_ms_inventory').click(function(){
 var url = $(this).attr('href');
 $.ajax({
  url : url,
  success:function(response){
   $('#modal-inv').html(response);
  }
 });
});

});
</script>

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
