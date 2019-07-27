<!DOCTYPE html>
<?php include 'config/head.php'; ?>
<?php
include "config/koneksi.php";
$query = mysqli_query($koneksi_utl,"SELECT * FROM profile");
while ($dataTampil = mysqli_fetch_array($query)) {
  ?>
  <title><?php echo $dataTampil[1];?> - Procucrement</title>

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
         Data Master Supplier - Procurement
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
              <h3 class="box-title"> List Data Supplier</h3>
			            <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
				              <table id="example5" class=" table table-bordered table-striped display nowrap" style="width:100%">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Kode Supplier</th>
                  <th>Nama Supplier</th>
                  <th>Kota</th>
                  <th>Telp</th>
                  <th>Alamat </th>
                  <th>Act </th>
                </tr>
                </thead>

                <tbody>
	<?php
	include "config/koneksi.php";
  $no = 0;
  error_reporting(0);
    $sql = mysqli_query($koneksi_pcr,"SELECT * FROM apmst ORDER BY namasup DESC") or die (mysqli_error($koneksi_inv));

  while($d = mysqli_fetch_array($sql)){
  $no++;
    ?>
					<tr>
					<td><?php echo $no; ?></td>
					<td><?php echo $d[0];?></td>
					<td><?php echo $d[1];?></td>
          <td><?php echo $d[4];?></td>
          <td><?php echo $d[7];?></td>
          <td><?php echo $d[2];?></td>

					<td>
            <a id = "info_ms_supplier" href = "info_ms_supplier.php?kodesup=<?php echo $d[0]; ?>"
            <button type="button" data-toggle="modal" data-target="#modal-pcr" class="btn btn-info btn-m"><i class="fa fa-search"></i> </button></a>
					</td>



					</tr>
									<?php } ?>
                </tbody>

                <tfoot>
                <tr>
                  <th>No</th>
                  <th>Kode Supplier</th>
                  <th>Nama Supplier</th>
                  <th>Kota</th>
                  <th>Telp</th>
                  <th>Alamat </th>
                  <th>Act </th>
                </tr>
                </tfoot>
              </table>

<div class="modal fade" id="modal-pcr" tabindex="-1" role="dialog" aria-labelledby="keterangan" aria-hidden="true"></div>
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

<?php include 'config/footer.php'; ?>


<script type="text/javascript">
$(document).ready(function(){
$('a#info_ms_supplier').click(function(){
 var url = $(this).attr('href');
 $.ajax({
  url : url,
  success:function(response){
   $('#modal-pcr').html(response);
  }
 });
});

});
</script>


</body>
</html>
<?php } ?>
