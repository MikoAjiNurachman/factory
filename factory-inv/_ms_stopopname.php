<!DOCTYPE html>

<?php include 'config/head.php'; ?>
<script src="editable/js/jquery-2.0.3.min.js"></script>
<script src="editable/js/bootstrap.min.js"></script>
<link href="editable/css/bootstrap-editable.css" rel="stylesheet">
<script src="editable/js/bootstrap-editable.js"></script>
<?php
include "config/koneksi.php";
$query = mysqli_query($koneksi_utl,"SELECT * FROM profile");
while ($dataTampil = mysqli_fetch_array($query)) {
  ?>
  <title><?php echo $dataTampil[1];?> - Kategori Inventory</title>

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
         Data Inventory Stop Opname Bahan Baku
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
              <h3 class="box-title">Form Tambah & List Data Stop opname</h3>
			            <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <div class="col-md-12">

				<form action = "backend/p_t_stopopname" method = "GET">

			  <div class="alert alert-info alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-info"></i> Informasi !</h4>
                DISINI ANDA DIPERBOLEHKAN UNTUK MENAMBAH, MENGUPDATE DAN MENGHAPUS DATA KATEGORI
              </div>





			<div class="col-md-2">
                      <label>Kode Item</label>
                      <?php
                 include 'config/koneksi.php';
                 $result = mysqli_query($koneksi_inv,"SELECT * FROM ms_inmst1 "); //
         echo '

        <select name="kodeitem1" class = "form-control select2" required id="kodeitem1" >';
        echo '<option>Pilih Kode Item</option>';
        while ($row = mysqli_fetch_array($result)) {
        echo '<option value="'.$row['kodeitem'].'">'.$row['kodeitem'].'</option>';
        }
        echo '</select>';
        ?>
                      <br>
      </div>

      <div class="col-md-2">
                      <label>to</label>
                      <?php
                 include 'config/koneksi.php';
                 $result = mysqli_query($koneksi_inv,"SELECT * FROM ms_inmst1 "); //
         echo '

        <select name="kodeitem2" class = "form-control select2" required id="kodeitem2" >';
        echo '<option>Pilih Kode Item</option>';
        while ($row = mysqli_fetch_array($result)) {
        echo '<option value="'.$row['kodeitem'].'">'.$row['kodeitem'].'</option>';
        }
        echo '</select>';
        ?>
                      <br><br>


                      <label>Bulan Opname</label>
                      <input type="date" class="form-control" name = "tgl" required>
                      <br>

                      <div class = "pull-right">
                      <input type = "reset" value = "Reset" class = "btn btn-danger" ></input>
                         <input type = "submit" id = "simpan" name = "simpan"  value = "Search" class = "btn btn-info" ></input>
                         </div>
      </div>





	</form>

  <div class="col-md-8">
    				              <table id="example5" class=" table table-bordered table-striped display nowrap" style="width:100%">
                    <thead>
                    <tr>
                     <th>No</th>
                     <th>Kode Item</th>
                     <th>Nama</th>
                     <th>Sat</th>
                     <th>Qty Opaname</th>
                    </tr>
                    </thead>

                    <tbody id = "employee_data">
    	<?php
    	include "config/koneksi.php";
      $no = 0;
      $query = mysqli_query($koneksi_inv,"SELECT u.kodeitem, u.qty, u.satuan, a.kodeitem, a.namabrg FROM opname1 AS u INNER JOIN ms_inmst1 AS a ON u.kodeitem = a.kodeitem")or die(mysqli_error($koneksi_inv));
      while ($d = mysqli_fetch_array($query)) {
        $no++
        ?>
    					<tr>
    					<td><?php echo $no; ?></td>
    					<td><button type= 'button' class= 'btn bg-maroon btn-flat'><?php echo $d[0];?></td>
    					<td><?php echo $d[4];?></td>
              <td><?php echo $d[2];?></td>
              <td data-name="qty" class="qty" data-type="text" data-pk="<?php echo $d['kodeitem'] ?>"><?php echo $d[1];?></td>

    					</tr>
    									<?php } ?>
                    </tbody>

                    <tfoot>
                    <tr>
                      <th>No</th>
                      <th>Kode Item</th>
                      <th>Nama</th>
                      <th>Sat</th>
                      <th>Qty Opaname</th>
                    </tr>
                    </tfoot>
                  </table>

                  </form>
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
    </section>
    <!-- /.content -->
  <!-- /.content-wrapper -->
</div>

<!-- ./wrapper -->
<script type="text/javascript">
//turn to inline mode
//$.fn.editable.defaults.mode = 'inline';
$('#employee_data').editable({
 container: 'body',
 selector: 'td.qty',
 url: "backend/p_e_stopopname",
 title: 'Input Qty Stopopname',
 type: "POST",
 dataType: 'json',
 validate: function(value){
  if($.trim(value) == '')
  {
   return 'This field is required';
  }
  var regex = /^[0-9]+$/;
   if($.isNumeric(value) == '')
   {
    return 'Numbers only!';
   }
 }
});
</script>

<?php include 'config/footer.php'; ?>

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
