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

			  <div class="alert alert-info alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-info"></i> Informasi !</h4>
                DISINI ANDA DIPERBOLEHKAN UNTUK MENCARI, MENAMBAH, MENGUPDATE DAN MENGHAPUS DATA KONVERSI
              </div>


              <form action = "backend/p_t_inventory" method = "post">



            <div class="col-md-6">
                            <label>Kode Item</label>
                            <div class="form-group">
                             <input type="text" class="form-control" name = "kodeitem" required placeholder="Input kode item..." >
                           </div>
                   </div>

                   <div class="col-md-6">
                                   <label>Kategori</label>
                                   <div class="form-group">
                                   <?php
                              include 'config/koneksi.php';
                              $result = mysqli_query($koneksi_inv,"SELECT * FROM ms_kategori ");
                      echo '

                     <select name="kategori" class = "form-control select2" required id="kategori" >';
                     echo '<option>Pilih Kategori </option>';
                     while ($row = mysqli_fetch_array($result)) {
                     echo '<option value="'.$row['kategori'].'">'.$row['kategori'].' - '.$row['ket'].'</option>';
                     }
                     echo '</select>';
                     ?>
                   </div>
                </div>

                <div class="col-md-12">
                                <label>Nama Item</label>
                                <div class="form-group">
                                 <input type="text" class="form-control" name = "namabrg" required placeholder="Input Nama item..." >
                               </div>
                       </div>

                <div class="col-md-2">
                    <label>Kd Gudang</label>
                    <div class="form-group">
                     <b><input type="text" class="form-control" name = "kdgudang1" value = "01" readonly  ></b>
                   </div>
                </div>

                <div class="col-md-2">
                    <label>Kd Rack</label>
                    <div class="form-group">
                    <?php
               include 'config/koneksi.php';
               $result = mysqli_query($koneksi_inv,"SELECT * FROM ms_rack ");
       echo '

      <select name="kdrak1" class = "form-control select2" required id="kdrak1" >';
      echo '<option>Kode Rack</option>';
      while ($row = mysqli_fetch_array($result)) {
      echo '<option value="'.$row['kdrak'].'">'.$row['kdrak'].'</option>';
      }
      echo '</select>';
      ?>
      </div>
                </div>

                <div class="col-md-2">
                    <label>Satuan</label>
                    <div class="form-group">
                      <?php
                 include 'config/koneksi.php';
                 $result = mysqli_query($koneksi_inv,"SELECT * FROM ms_satuan ");
         echo '

        <select name="satuan1" class = "form-control select2" required id="satuan1" >';
        echo '<option>Satuan</option>';
        while ($row = mysqli_fetch_array($result)) {
        echo '<option value="'.$row['satuan'].'">'.$row['satuan'].'</option>';
        }
        echo '</select>';
        ?>
                   </div>
                </div>

                <div class="col-md-3">
                    <label>Max Inv</label>
                    <div class="form-group">
                     <input type="number" min = "0" class="form-control" name = "mip" required placeholder="Input max inv..." >
                   </div>
                </div>

                <div class="col-md-3">
                    <label>Min Inv</label>
                    <div class="form-group">
                     <input type="number" min = "0" class="form-control" name = "min" required placeholder="Input min inv..." >
                   </div>
                </div>



                <div class="col-md-2">
                    <label>Kd Gudang</label>
                    <div class="form-group">
                     <b><input type="text" class="form-control" name = "kdgudang2" value = "02" readonly  ></b>
                   </div>
                </div>

                <div class="col-md-2">
                    <label>Kd Rack</label>
                    <div class="form-group">
                      <?php
                 include 'config/koneksi.php';
                 $result = mysqli_query($koneksi_inv,"SELECT * FROM ms_rack ");
         echo '

        <select name="kdrak2" class = "form-control select2" required id="kdrak2" >';
        echo '<option>Kode Rack</option>';
        while ($row = mysqli_fetch_array($result)) {
        echo '<option value="'.$row['kdrak'].'">'.$row['kdrak'].'</option>';
        }
        echo '</select>';
        ?>
                   </div>
                </div>

                <div class="col-md-2">
                    <label id = "satuan2">Satuan</label>
                    <div class="form-group">
                      <?php
                 include 'config/koneksi.php';
                 $result = mysqli_query($koneksi_inv,"SELECT * FROM ms_satuan ");
         echo '

        <select name="satuan2" class = "form-control select2" required id="satuan2" >';
        echo '<option>Satuan</option>';
        while ($row = mysqli_fetch_array($result)) {
        echo '<option value="'.$row['satuan'].'">'.$row['satuan'].'</option>';
        }
        echo '</select>';
        ?>

        <input type="hidden" value = "<?php echo $_SESSION['username'];?>" class='form-control' name='kduser' readonly>
                       <?php
                date_default_timezone_set('Asia/Jakarta');
                $tgl = date('Y-m-d');
                ?>
                <input type="hidden" value = "<?php echo $tgl;?>" class='form-control' name='tglentry' readonly>
                   </div>
                </div>


                <div class = "pull-right">
                  <a href = "_ms_inventory"><input type = "button" value = "Kembali" class = "btn btn-warning" ></input></a>
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
