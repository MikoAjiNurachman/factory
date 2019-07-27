<!DOCTYPE html>

<?php include 'config/head.php'; ?>
<?php
include "config/koneksi.php";
$query = mysqli_query($koneksi_utl,"SELECT * FROM profile");
while ($dataTampil = mysqli_fetch_array($query)) {
  ?>
  <title><?php echo $dataTampil[1];?> - Konversi Inventory</title>

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
         Data Master Inventory - Konversi
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
              <h3 class="box-title">Form Tambah & List Data Konversi</h3>
			            <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <div class="col-md-12">

				<form action = "backend/p_t_konversi" method = "post">

			  <div class="alert alert-info alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-info"></i> Informasi !</h4>
                DISINI ANDA DIPERBOLEHKAN UNTUK MENAMBAH, MENGUPDATE DAN MENGHAPUS DATA KONVERSI
              </div>


			<div class="col-md-2">
                      <label>Satuan</label>
                      <?php
                 include 'config/koneksi.php';
                 $result = mysqli_query($koneksi_inv,"SELECT * FROM ms_satuan "); //koneksi2 ini nantinya lookup dgn db_toko yg asli
         echo '

        <select name="satuan" class = "form-control select2" required id="satuan" >';
        echo '<option>Pilih Satuan</option>';
        while ($row = mysqli_fetch_array($result)) {
        echo '<option value="'.$row['satuan'].'">'.$row['satuan'].'</option>';
        }
        echo '</select>';
        ?>
             </div>

             <div class="col-md-2">
                     <div class="form-group">
                       <label>Jumlah</label>
                      <input type="number" class="form-control" name = "jml" required min = "0" placeholder="ex : 99,999,99.." >
                    </div>
                    </div>

                    <div class = "col-sm-1">
                          <img alt = "konversi" src = "img/arrow.png" height="100%" width="100%"/>
                               </div>

                    <div class="col-md-2">
                                    <label>Satuan</label>
                                    <?php
                               include 'config/koneksi.php';
                               $result = mysqli_query($koneksi_inv,"SELECT * FROM ms_satuan "); //koneksi2 ini nantinya lookup dgn db_toko yg asli
                       echo '

                      <select name="satuan2" class = "form-control select2" required id="satuan2" >';
                      echo '<option>Pilih Satuan</option>';
                      while ($row = mysqli_fetch_array($result)) {
                      echo '<option value="'.$row['satuan'].'">'.$row['satuan'].'</option>';
                      }
                      echo '</select>';
                      ?>
                           </div>

                           <div class="col-md-2">
                                   <div class="form-group">
                                     <label>Jumlah</label>
                                    <input type="number" class="form-control" name = "jml2" required min = "0" placeholder="ex : 99,999,99.." >
                                  </div>
                                  </div>


                    <div class = "col-md-1">
                    <div class="form-group">
                                   <?php
                            date_default_timezone_set('Asia/Jakarta');
                            $tgl = date('Y-m-d');
                            ?>
                            <input type="hidden" value = "<?php echo $tgl;?>" class='form-control' name='tglentry' id='tglentry' readonly>
                              <input type="hidden" value = "<?php echo $_SESSION['username'];?>" class='form-control' name='kduser' readonly>
                                  <!-- /.input group -->
                                </div>
                               </div>
<br>

			<div class = "pull-right">
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

        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Data Tampil Konversi Inventory</h3>
			            <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
<form action="backend/p_d_b_konversi.php" method="post">
				              <table id="example5" class=" table table-bordered table-striped display nowrap" style="width:100%">
                <thead>
                <tr>
                  <th><input type="checkbox" id="check-all"></th>
                  <th>No</th>
                  <th>Satuan</th>
                  <th>Jml</th>
                  <th>Satuan</th>
                  <th>Jml</th>
                  <th>Action </th>
                </tr>
                </thead>

                <tbody>
	<?php
	include "config/koneksi.php";
  $no = 0;
  $query = mysqli_query($koneksi_inv,"SELECT * FROM ms_konversi")or die(mysqli_error($koneksi_inv));
  while ($d = mysqli_fetch_array($query)) {
    $no++
    ?>
					<tr>
            <td><input type="checkbox" class="check-item" id="cekbox" name="cekbox[]" value="<?php echo $d['nokonter'] ?>"/></td>
					<td><?php echo $no; ?></td>
					<td><u><a href = "_ms_satuan"><?php echo $d[1];?></td></a></u>
					<td><?php echo $d[2];?></td>
          <td><u><a href = "_ms_satuan"><?php echo $d[3];?></td></a></u>
          <td><?php echo $d[4];?></td>

					<td>
				<a href = "_edit_ms_konversi.php?nokonter=<?php echo $d[0]; ?>"   <button type="button"  class="btn btn-primary btn-s" title = "Edit"><i class="fa fa-edit"></i></button></a>
				<a href = "backend/p_d_konversi.php?nokonter=<?php echo $d[0]; ?>" onclick="return confirm('Apakah anda yakin untuk menghapus Konversi : <?php echo $d[1] ." >> ".  $d[3];?> ?')" <button type="button"  class="btn btn-danger btn-s"><i class="fa fa-trash"></i></button></a>
					</td>



					</tr>
									<?php } ?>
                </tbody>

                <tfoot>
                <tr>
                  <th>Pilih</th>
                  <th>No</th>
                  <th>Satuan</th>
                  <th>Jml</th>
                  <th>Satuan</th>
                  <th>Jml</th>
                  <th>Action </th>
                </tr>
                </tfoot>
              </table>
              <input type="submit" onclick="return confirm('Apakah anda yakin untuk menghapus data konversi yang terpilih ?')" value="Hapus" name="submit" /><br />
            </form>

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
