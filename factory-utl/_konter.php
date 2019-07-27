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
         Setup No Counter
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
              <h3 class="box-title">Form Setup No Counter</h3>
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
                      DISINI ANDA DIPERBOLEHKAN UNTUK MENGUPDATE DATA COUNTER
                    </div>

    				              <table id="example2" class=" table table-bordered table-striped display nowrap" style="width:100%">
                    <thead>
                    <tr>
                     <th>Nama Counter</th>
                     <th>Header ( 2 dgt )</th>
                     <th>No Counter ( 8 dgt)</th>
                    </tr>
                    </thead>

                    <tbody id = "employee_data">
    	<?php
    	include "config/koneksi.php";
      $no = 0;
      $query = mysqli_query($koneksi_utl,"SELECT* FROM konter")or die(mysqli_error($koneksi_utl));
      $d = mysqli_fetch_array($query);
        $no++
        ?>
    					<tr>
    					<td>Kd PO</td>
              <td data-name="kodepo" class="kodepo" data-type="text" data-pk="<?php echo $d['kodecbg'] ?>"><?php echo $d['kodepo'];?></td>
              <td data-name="konterpo" class="konterpo" data-type="text" data-pk="<?php echo $d['kodecbg'] ?>"><?php echo $d['konterpo'];?></td>
    					</tr>
              <tr>
              <td>Kd Retur Beli</td>
              <td data-name="koderb" class="koderb" data-type="text" data-pk="<?php echo $d['kodecbg'] ?>"><?php echo $d['koderb'];?></td>
              <td data-name="konterrb" class="konterrb" data-type="text" data-pk="<?php echo $d['kodecbg'] ?>"><?php echo $d['konterrb'];?></td>
              </tr>
              <tr>
              <td>Kd Pesan Bhn ke Gd 1</td>
              <td data-name="kodefpb" class="kodefpb" data-type="text" data-pk="<?php echo $d['kodecbg'] ?>"><?php echo $d['kodefpb'];?></td>
              <td data-name="konterfpb" class="	konterfpb" data-type="text" data-pk="<?php echo $d['kodecbg'] ?>"><?php echo $d['konterfpb'];?></td>
              </tr>
              <tr>
              <td>Kirim Bhn ke Gd 2</td>
              <td data-name="kodefkb" class="kodefkb" data-type="text" data-pk="<?php echo $d['kodecbg'] ?>"><?php echo $d['kodefkb'];?></td>
              <td data-name="konterfkb" class="konterfkb" data-type="text" data-pk="<?php echo $d['kodecbg'] ?>"><?php echo $d['konterfkb'];?></td>
              </tr>
              <tr>
              <td>Retur Gd 2 ke Gd 1</td>
              <td data-name="kodero" class="kodero" data-type="text" data-pk="<?php echo $d['kodecbg'] ?>"><?php echo $d['kodero'];?></td>
              <td data-name="konterro" class="konterro" data-type="text" data-pk="<?php echo $d['kodecbg'] ?>"><?php echo $d['konterro'];?></td>
              </tr>
              <tr>
              <td>Kirim Gd 2 ke Gd 3</td>
              <td data-name="kodeg2g3" class="kodeg2g3" data-type="text" data-pk="<?php echo $d['kodecbg'] ?>"><?php echo $d['kodeg2g3'];?></td>
              <td data-name="konterg2g3" class="konterg2g3" data-type="text" data-pk="<?php echo $d['kodecbg'] ?>"><?php echo $d['konterg2g3'];?></td>
              </tr>
              <tr>
              <td>Retur Gd 3 ke Gd 2</td>
              <td data-name="returg3g2" class="returg3g2" data-type="text" data-pk="<?php echo $d['kodecbg'] ?>"><?php echo $d['returg3g2'];?></td>
              <td data-name="konreg3g2" class="konreg3g2" data-type="text" data-pk="<?php echo $d['kodecbg'] ?>"><?php echo $d['konreg3g2'];?></td>
              </tr>
              <tr>
              <td>Sales Invoice Factory</td>
              <td data-name="kodesi" class="kodesi" data-type="text" data-pk="<?php echo $d['kodecbg'] ?>"><?php echo $d['kodesi'];?></td>
              <td data-name="kontersi" class="kontersi" data-type="text" data-pk="<?php echo $d['kodecbg'] ?>"><?php echo $d['kontersi'];?></td>
              </tr>
              <tr>
              <td>Kd Surat Jalan</td>
              <td data-name="kodesj" class="kodesj" data-type="text" data-pk="<?php echo $d['kodecbg'] ?>"><?php echo $d['kodesj'];?></td>
              <td data-name="kontersj" class="kontersj" data-type="text" data-pk="<?php echo $d['kodecbg'] ?>"><?php echo $d['kontersj'];?></td>
              </tr>
              <tr>
              <td>Kode Kwitansi</td>
              <td data-name="kodekwi" class="kodekwi" data-type="text" data-pk="<?php echo $d['kodecbg'] ?>"><?php echo $d['kodekwi'];?></td>
              <td data-name="konterkwi" class="konterkwi" data-type="text" data-pk="<?php echo $d['kodecbg'] ?>"><?php echo $d['konterkwi'];?></td>
              </tr>
              <tr>
              <td>Kode Kas Masuk</td>
              <td data-name="kodeasmsk" class="kodeasmsk" data-type="text" data-pk="<?php echo $d['kodecbg'] ?>"><?php echo $d['kodeasmsk'];?></td>
              <td data-name="konterasmsk" class="konterasmsk" data-type="text" data-pk="<?php echo $d['kodecbg'] ?>"><?php echo $d['konterasmsk'];?></td>
              </tr>
              <tr>
              <td>Kode Kas Keluar</td>
              <td data-name="kodekasklr" class="kodekasklr" data-type="text" data-pk="<?php echo $d['kodecbg'] ?>"><?php echo $d['kodekasklr'];?></td>
              <td data-name="konterkasklr" class="konterkasklr" data-type="text" data-pk="<?php echo $d['kodecbg'] ?>"><?php echo $d['konterkasklr'];?></td>
              </tr>
              <tr>
              <td>Kd Transfer antar Bank</td>
              <td data-name="kodekastb" class="kodekastb" data-type="text" data-pk="<?php echo $d['kodecbg'] ?>"><?php echo $d['kodekastb'];?></td>
              <td data-name="konterkastb" class="konterkastb" data-type="text" data-pk="<?php echo $d['kodecbg'] ?>"><?php echo $d['konterkastb'];?></td>
              </tr>
              <tr>
              <td>Kd Inventory Adj Gd 1</td>
              <td data-name="	kodein" class="	kodein" data-type="text" data-pk="<?php echo $d['kodecbg'] ?>"><?php echo $d['kodein'];?></td>
              <td data-name="konterin" class="konterin" data-type="text" data-pk="<?php echo $d['kodecbg'] ?>"><?php echo $d['konterin'];?></td>
              </tr>
              <tr>
              <td>Kd Inventory Adj Gd 2</td>
              <td data-name="kodein2" class="kodein2" data-type="text" data-pk="<?php echo $d['kodecbg'] ?>"><?php echo $d['kodein2'];?></td>
              <td data-name="konterin2" class="konterin2" data-type="text" data-pk="<?php echo $d['kodecbg'] ?>"><?php echo $d['konterin2'];?></td>
              </tr>
              <tr>
              <td>Kd Inventory Adj Gd 3</td>
              <td data-name="kodein3" class="kodein3" data-type="text" data-pk="<?php echo $d['kodecbg'] ?>"><?php echo $d['kodein3'];?></td>
              <td data-name="konterin3" class="konterin3" data-type="text" data-pk="<?php echo $d['kodecbg'] ?>"><?php echo $d['konterin3'];?></td>
              </tr>
              <tr>
              <td>Kode Accounting Adj</td>
              <td data-name="kodeacc" class="kodeacc" data-type="text" data-pk="<?php echo $d['kodecbg'] ?>"><?php echo $d['kodeacc'];?></td>
              <td data-name="konteracc" class="konteracc" data-type="text" data-pk="<?php echo $d['kodecbg'] ?>"><?php echo $d['konteracc'];?></td>
              </tr>
              <tr>
              <td>Konter pajak awal</td>
              <td data-name="kodein2" class="kodein2" data-type="text" data-pk="<?php echo $d['kodecbg'] ?>"><?php echo $d['kodein2'];?></td>
              <td data-name="konterpjkawl" class="konterpjkawl" data-type="text" data-pk="<?php echo $d['kodecbg'] ?>"><?php echo $d['konterpjkawl'];?></td>
              </tr>
              <tr>
              <td>Konter pajak akhir</td>
              <td data-name="kodein2" class="kodein2" data-type="text" data-pk="<?php echo $d['kodecbg'] ?>"><?php echo $d['kodein2'];?></td>
              <td data-name="konterpjkakh" class="konterpjkakh" data-type="text" data-pk="<?php echo $d['kodecbg'] ?>"><?php echo $d['konterpjkakh'];?></td>
              </tr>
              <tr>
              <td>Konter pajak awal1</td>
              <td data-name="kodein2" class="kodein2" data-type="text" data-pk="<?php echo $d['kodecbg'] ?>"><?php echo $d['kodein2'];?></td>
              <td data-name="konterpjkawl1" class="konterpjkawl1" data-type="text" data-pk="<?php echo $d['kodecbg'] ?>"><?php echo $d['konterpjkawl1'];?></td>
              </tr>
              <tr>
              <td>Konter pajak akhir1</td>
              <td data-name="kodein2" class="kodein2" data-type="text" data-pk="<?php echo $d['kodecbg'] ?>"><?php echo $d['kodein2'];?></td>
              <td data-name="konterpjkakh1" class="konterpjkakh1" data-type="text" data-pk="<?php echo $d['kodecbg'] ?>"><?php echo $d['konterpjkakh1'];?></td>
              </tr>

                    </tbody>

                    <tfoot>
                    <tr>
                      <th>Nama Counter</th>
                      <th>Header ( 2 dgt )</th>
                      <th>No Counter ( 8 dgt)</th>
                    </tr>
                    </tfoot>
                  </table>



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
$.fn.editable.defaults.mode = 'inline';
$('#employee_data').editable({
 container: 'body',
 selector: 'td.kodepo,td.koderb,td.kodefpb,td.kodefkb,td.kodero,td.kodeg2g3,td.returg3g2,td.kodesi,td.kodesj,td.kodekwi,td.kodeasmsk,td.kodekasklr,td.kodekastb,td.kodein,td.kodein2,td.kodein3,td.kodeacc',
 url: "backend/p_e_nocounter.php",
 title: 'Input Kode Counter',
 type: "POST",
 dataType: 'json',
 validate: function(value){
  if($.trim(value) == '')
  {
   return false;
  }
 }
});
</script>

<script type="text/javascript">
//turn to inline mode
$.fn.editable.defaults.mode = 'inline';
$('#employee_data').editable({
 container: 'body',
 selector: 'td.konterpo,td.konterrb,td.konterfpb,td.konterfkb,td.konterro,td.konterg2g3,td.konreg3g2,td.kontersi,td.kontersj,td.konterkwi,td.konterasmsk,td.konterkasklr,td.konterkastb,td.konterin,td.konterin2,td.konterin3,td.konteracc,td.konterpjkawl,td.konterpjkakh,td.konterpjkawl1,td.konterpjkakh1',
 url: "backend/p_e_nocounter.php",
 title: 'Input No Counter',
 type: "POST",
 dataType: 'json',
 validate: function(value){
  if($.trim(value) == '')
  {
   return false;
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
