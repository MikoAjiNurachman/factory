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
         Data Master Inventory - Inventory
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

          <a href = "_tbh_inventory.php"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-tambah">
            Tambah Data Inventory
          </button></a>

          <br><br>

          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Form Tambah & List Data Inventory</h3>
			            <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <div class="col-md-12">

				<form action = "#" method = "post">

			  <div class="alert alert-info alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-info"></i> Informasi !</h4>
                DISINI ANDA DIPERBOLEHKAN UNTUK MENCARI, MENAMBAH, MENGUPDATE DAN MENGHAPUS DATA KONVERSI
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
                            <input type="hidden" value = "<?php echo $tgl;?>" class='form-control' name='tgl_entry' id='tgl_entry' readonly>
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

        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"> List Data  Inventory</h3>
			            <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
<form action="backend/p_d_b_inventory.php" method="post">
				              <table id="example5" class=" table table-bordered table-striped display nowrap" style="width:100%">
                <thead>
                <tr>
                  <th><input type="checkbox" id="check-all"></th>
                  <th>No</th>
                  <th>Kode Item</th>
                  <th>Nama</th>
                  <th>KD Gudang</th>
                  <th>KD Rack</th>
                  <th>Qty </th>
                  <th>Satuan </th>
                  <th>Act </th>
                </tr>
                </thead>

                <tbody>
	<?php
	include "config/koneksi.php";
  $no = 0;
 error_reporting(0);
  if(isset($_POST['search'])){
  $satuan1 = $_POST['satuan1'];
  $satuan2 = $_POST['satuan2'];
  $namabrg1 = $_POST['namabrg1'];
  $namabrg2 = $_POST['namabrg2'];

    $sql=mysqli_query($koneksi_inv,"SELECT * FROM ms_inmst1  WHERE kodeitem between '$satuan1' AND '$satuan2'
    or namabrg  like '%". $namabrg1 ."%' AND '%". $namabrg2 ."%' ORDER BY kodeitem ")or die (mysqli_error($koneksi_inv));
  }else{
    $sql = mysqli_query($koneksi_inv,"SELECT * FROM ms_inmst1 ORDER BY namabrg DESC") or die (mysqli_error($koneksi_inv));
  }

  while($d = mysqli_fetch_array($sql)){
  $no++;
    ?>
					<tr>
            <td><input type="checkbox" class="check-item" id="cekbox" name="cekbox[]" value="<?php echo $d['kodeitem'] ?>"/></td>
					<td><?php echo $no; ?></td>
					<td><?php echo $d[1];?></td>
					<td><?php echo $d[2];?></td>
          <td><?php echo $d[10];?></td>
          <td><?php echo $d[11];?></td>
          <td><?php echo $d[8];?></td>
          <td><?php echo $d[9];?></td>

					<td>
            <a id = "info_ms_inventory" href = "info_ms_inventory.php?kodeitem=<?php echo $d['1']; ?>"
            <button type="button" data-toggle="modal" data-target="#modal-inv" class="btn btn-info btn-m"><i class="fa fa-search"></i> </button></a>

            <a id = "_edit_ms_inventory" href = "_edit_ms_inventory.php?kodeitem=<?php echo $d['1']; ?>"
            <button type="button" data-toggle="modal" data-target="#modal-info" class="btn btn-primary btn-m"><i class="fa fa-edit"></i> </button></a>

            <a href = "barcode/barcode.php?kodeitem=<?php echo $d[1]; ?>" onclick="return confirm('Apakah anda yakin untuk print barcode inventory : <?php echo $d[1];?> ?')" <button type="button" target="_blank"  class="btn btn-success btn-s"><i class="fa fa-print"></i></button></a>
				    <a href = "backend/p_d_inventory.php?kodeitem=<?php echo $d[1]; ?>" onclick="return confirm('Apakah anda yakin untuk menghapus Kode Inventory : <?php echo $d[1];?> ?')" <button type="button"  class="btn btn-danger btn-s"><i class="fa fa-trash"></i></button></a>
					</td>



					</tr>
									<?php } ?>
                </tbody>

                <tfoot>
                <tr>
                  <th>Pilih</th>
                  <th>No</th>
                  <th>Kode Item</th>
                  <th>Nama</th>
                  <th>KD Gudang</th>
                  <th>KD Rack</th>
                  <th>Qty </th>
                  <th>Satuan </th>
                  <th>Act </th>
                </tr>
                </tfoot>
              </table>
              <input type="submit" onclick="return confirm('Apakah anda yakin untuk menghapus data inventory yang terpilih ?')" value="Hapus" name="submit" /><br />
            </form>

<div class="modal fade" id="modal-info" tabindex="-1" role="dialog" aria-labelledby="keterangan" aria-hidden="true"></div>
<div class="modal fade" id="modal-inv" tabindex="-1" role="dialog" aria-labelledby="keterangan" aria-hidden="true"></div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
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
