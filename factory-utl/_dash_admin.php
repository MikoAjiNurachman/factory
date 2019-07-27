<!DOCTYPE html>
<?php include 'config/head.php'; ?>
<?php
include "config/koneksi.php";
$query = mysqli_query($koneksi_utl,"SELECT * FROM profile");
while ($dataTampil = mysqli_fetch_array($query)) {
  ?>
  <title><?php echo $dataTampil[1];?> - Setup Profile</title>

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
$query = mysqli_query($koneksi_utl,"select * from profile");
while ($dataTampil = mysqli_fetch_array($query)) {
  ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
         Dashboard
        <small><?php echo $dataTampil['namacbg'];?></small>
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
    </section>

	<!--  SHOW DATA PELANGGAN -->

	   			  		<?php
						include 'config/koneksi.php';
						$tampil = "SELECT * FROM ms_inmst1 JOIN ms_inmst2";
						$qryTampil=mysqli_query($koneksi_inv,$tampil);
						$count1=mysqli_num_rows($qryTampil);
						?>

						<!--  SHOW DATA PELANGGAN -->


						<?php
						include 'config/koneksi.php';
						$tampil2 = "SELECT * FROM apmst";
						$qryTampil2=mysqli_query($koneksi_pcr,$tampil2);
						$count3=mysqli_num_rows($qryTampil2);
						?>



						<?php
						include 'config/koneksi.php';
						$tampil3 = "SELECT * FROM tbl_ms_fatype";
						$qryTampil3=mysqli_query($koneksi_inv,$tampil3);
						$count4=mysqli_num_rows($qryTampil3);
						?>

            <?php
						include 'config/koneksi.php';
						$tampil4 = "SELECT * FROM tbl_posting";
						$qryTampil4=mysqli_query($koneksi_inv,$tampil4);
						$count5=mysqli_num_rows($qryTampil4);
						?>


						<!--  SHOW DATA PELANGGAN -->

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-7">
          <div class="box">
            <div class="box-header with-border">
              <?php
              include "config/koneksi.php";
              $query = mysqli_query($koneksi_utl,"select * from profile");
              while ($dataTampil = mysqli_fetch_array($query)) {
                ?>
              <h3 class="box-title">Monthly Jurnal Recap Report <?php echo $dataTampil['namacbg']; ?></h3>
            <?php } ?>
            </div>
            <!-- /.box-header -->
            <div class="box-body">


<script src="dist/js/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="dist/js/highcharts.js" type="text/javascript"></script>
<script src="dist/js/exporting.js" type="text/javascript"></script>
<script type="text/javascript">
	var chart1; // globally available
$(document).ready(function() {
      chart1 = new Highcharts.Chart({
         chart: {
            renderTo: 'container',
            type: 'column'
         },
         title: {
            text: 'Grafik Monthly Jurnal Recap Report '
         },
         xAxis: {
            categories: ['Nama per Bulan']
         },
         yAxis: {
            title: {
               text: 'Total '
            }
         },
              series:
            [
<?php
// file koneksi php
include 'config/koneksi.php';

$query = mysqli_query($koneksi,"SELECT DISTINCT `bulan_arsip` FROM `arsip_jurnal`");
while($ambil = mysqli_fetch_array($query)){

	$nama_arsip=$ambil['bulan_arsip'];
	$sql_jumlah   = "SELECT `bulan_arsip`,sum(`total_jurnal`) as arsip FROM  `arsip_jurnal` where `bulan_arsip`='$nama_arsip'";
	$query_jumlah = mysqli_query($koneksi,$sql_jumlah ) or die(mysqli_error($koneksi));


	while( $data = mysqli_fetch_array( $query_jumlah ) ){
	   $total_pendapatanx = $data['arsip'];
	  }

	  ?>
	  {
		  name: '<?php echo $nama_arsip; ?>',
		  data: [<?php echo $total_pendapatanx; ?>]
	  },
	  <?php } ?>
]
});
});
</script>
			  <div id="container" style="min-width: 200px; height: 400px; margin: 0 auto"></div>



            </div>
            <!-- ./box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->

      <!-- /.row -->

      <!-- TO DO List -->
      <div class="col-md-5">
        <!-- Info Boxes Style 2 -->
        <div class="info-box bg-yellow">
          <span class="info-box-icon"><i class="ion ion-ios-pricetag-outline"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Inventory</span>
            <span class="info-box-number"><?php echo ($count1)?></span>

            <div class="progress">
              <div class="progress-bar" style="width: 50%"></div>
            </div>
            <span class="progress-description">
                  50% Increase in 30 Days
                </span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
        <div class="info-box bg-green">
          <span class="info-box-icon"><i class="ion ion-ios-heart-outline"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Mentions</span>
            <span class="info-box-number">92,050</span>

            <div class="progress">
              <div class="progress-bar" style="width: 20%"></div>
            </div>
            <span class="progress-description">
                  20% Increase in 30 Days
                </span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
        <div class="info-box bg-red">
          <span class="info-box-icon"><i class="ion ion-ios-cloud-download-outline"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Downloads</span>
            <span class="info-box-number">114,381</span>

            <div class="progress">
              <div class="progress-bar" style="width: 70%"></div>
            </div>
            <span class="progress-description">
                  70% Increase in 30 Days
                </span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
        <div class="info-box bg-aqua">
          <span class="info-box-icon"><i class="ion-ios-chatbubble-outline"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Direct Messages</span>
            <span class="info-box-number">163,921</span>

            <div class="progress">
              <div class="progress-bar" style="width: 40%"></div>
            </div>
            <span class="progress-description">
                  40% Increase in 30 Days
                </span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->

    </div>

    <!-- TABLE: LATEST ORDERS -->
    <div class="col-md-7">
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Latest Orders</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
          </button>
          <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
        </div>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <div class="table-responsive">
          <table class="table no-margin">
            <thead>
            <tr>
              <th>Order ID</th>
              <th>Item</th>
              <th>Status</th>
              <th>Popularity</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td><a href="pages/examples/invoice.html">OR9842</a></td>
              <td>Call of Duty IV</td>
              <td><span class="label label-success">Shipped</span></td>
              <td>
                <div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div>
              </td>
            </tr>
            <tr>
              <td><a href="pages/examples/invoice.html">OR1848</a></td>
              <td>Samsung Smart TV</td>
              <td><span class="label label-warning">Pending</span></td>
              <td>
                <div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div>
              </td>
            </tr>
            <tr>
              <td><a href="pages/examples/invoice.html">OR7429</a></td>
              <td>iPhone 6 Plus</td>
              <td><span class="label label-danger">Delivered</span></td>
              <td>
                <div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div>
              </td>
            </tr>
            <tr>
              <td><a href="pages/examples/invoice.html">OR7429</a></td>
              <td>Samsung Smart TV</td>
              <td><span class="label label-info">Processing</span></td>
              <td>
                <div class="sparkbar" data-color="#00c0ef" data-height="20">90,80,-90,70,-61,83,63</div>
              </td>
            </tr>
            <tr>
              <td><a href="pages/examples/invoice.html">OR1848</a></td>
              <td>Samsung Smart TV</td>
              <td><span class="label label-warning">Pending</span></td>
              <td>
                <div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div>
              </td>
            </tr>
            <tr>
              <td><a href="pages/examples/invoice.html">OR7429</a></td>
              <td>iPhone 6 Plus</td>
              <td><span class="label label-danger">Delivered</span></td>
              <td>
                <div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div>
              </td>
            </tr>
            <tr>
              <td><a href="pages/examples/invoice.html">OR9842</a></td>
              <td>Call of Duty IV</td>
              <td><span class="label label-success">Shipped</span></td>
              <td>
                <div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div>
              </td>
            </tr>
            </tbody>
          </table>
        </div>
        <!-- /.table-responsive -->
      </div>
      <!-- /.box-body -->
      <div class="box-footer clearfix">
        <a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Place New Order</a>
        <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a>
      </div>
      <!-- /.box-footer -->
    </div>
    <!-- /.box -->
  </div>
  <!-- /.col -->

  <div class="col-md-5">
    <!-- PRODUCT LIST -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Recently Added Products</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
          </button>
          <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
        </div>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <ul class="products-list product-list-in-box">
          <li class="item">
            <div class="product-img">
              <img src="dist/img/default-50x50.gif" alt="Product Image">
            </div>
            <div class="product-info">
              <a href="javascript:void(0)" class="product-title">Samsung TV
                <span class="label label-warning pull-right">$1800</span></a>
              <span class="product-description">
                    Samsung 32" 1080p 60Hz LED Smart HDTV.
                  </span>
            </div>
          </li>
          <!-- /.item -->
          <li class="item">
            <div class="product-img">
              <img src="dist/img/default-50x50.gif" alt="Product Image">
            </div>
            <div class="product-info">
              <a href="javascript:void(0)" class="product-title">Bicycle
                <span class="label label-info pull-right">$700</span></a>
              <span class="product-description">
                    26" Mongoose Dolomite Men's 7-speed, Navy Blue.
                  </span>
            </div>
          </li>
          <!-- /.item -->
          <li class="item">
            <div class="product-img">
              <img src="dist/img/default-50x50.gif" alt="Product Image">
            </div>
            <div class="product-info">
              <a href="javascript:void(0)" class="product-title">Xbox One <span
                  class="label label-danger pull-right">$350</span></a>
              <span class="product-description">
                    Xbox One Console Bundle with Halo Master Chief Collection.
                  </span>
            </div>
          </li>
          <!-- /.item -->
          <li class="item">
            <div class="product-img">
              <img src="dist/img/default-50x50.gif" alt="Product Image">
            </div>
            <div class="product-info">
              <a href="javascript:void(0)" class="product-title">PlayStation 4
                <span class="label label-success pull-right">$399</span></a>
              <span class="product-description">
                    PlayStation 4 500GB Console (PS4)
                  </span>
            </div>
          </li>
          <!-- /.item -->
        </ul>
      </div>
      <!-- /.box-body -->
      <div class="box-footer text-center">
        <a href="javascript:void(0)" class="uppercase">View All Products</a>
      </div>
      <!-- /.box-footer -->
    </div>
    <!-- /.box -->

  </div>
  <!-- /.row -->
    </section>
    <!-- /.content -->




  </div>
  <!-- /.content-wrapper -->

<?php include 'config/footer.php'; ?>
<script src="dist/js/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="dist/js/highcharts.js" type="text/javascript"></script>
<script src="dist/js/exporting.js" type="text/javascript"></script>
</body>
</html>

<?php } ?>
