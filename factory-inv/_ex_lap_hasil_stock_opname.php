<!DOCTYPE html>
<html>
<head>
	<title>Export Lap Hasil Stock Opname</title>
</head>
<style>
			.tengah{
				text-align:center;
			}
			.kiri{
				text-align:left;
			}
			.kanan{
				text-align:right;
			}
		</style>
<body>

  <?php
	error_reporting(0);
  include "config/koneksi.php";
	function rupiah($angka){
		$rupiah = number_format($angka,0,',',',','.');
		return $rupiah;
	}
	$satuan1 = $_POST['satuan1'];
	$satuan2 = $_POST['satuan2'];

	$now = date('d F Y');
	header("Content-Type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Laporan_hasil_stock_opnm_$now.xls");
  #FOR RINCIAN AKHIR


  $company = mysqli_query($koneksi_utl, "SELECT * FROM profile");
  while($c = mysqli_fetch_array($company)){

   ?>
  	<center>
  		<b>Laporan Inventory Hasil Stock Opnm</b><br />
  		<?php echo $c[1]; ?><br /><br />

			<span class = "kiri">Range Kode Item : <?php echo $satuan1 ." s.d ". $satuan2; ?></span><br />
			<span class = "kanan">Tgl Cetak : <?php echo $now; ?></span>
			</center>
			<br />


  <?php
  		}
  			?>


				<table border="1">
	<thead>
	<tr>
		<th>No</th>
		<th>Kode Item</th>
		<th>Nama</th>
    <th>HPP </th>
		<th>Sat</th>
		<th>QTY Comp</th>
    <th>QTY Opnm</th>
    <th>QTY Selisih</th>
    <th>Jumlah Selisih</th>
	</tr>
	</thead>

	<tbody>
<?php
include "config/koneksi.php";
$no = 0;
error_reporting(0);
$satuan1 = $_POST['satuan1'];
$satuan2 = $_POST['satuan2'];
$namabrg1 = $_POST['namabrg1'];
$namabrg2 = $_POST['namabrg2'];
$tgl = $_POST['tgl_entry'];

$no++;
$sql=mysqli_query($koneksi_inv,"SELECT * FROM ms_inmst1  WHERE kodeitem between '$satuan1' AND '$satuan2'
or namabrg  like '%".$namabrg1."%' AND '%".$namabrg2."%' ORDER BY kodeitem ")or die (mysqli_error($koneksi_inv));

while($d = mysqli_fetch_array($sql)){

?>
<tr>
<td><?php echo $no; ?></td>
<td><?php echo $d[1];?></td>
<td><?php echo $d[2];?></td>
<td><?php echo $d[12];?></td>
<td><?php echo $d[9];?></td>
<?php }
$sql1=mysqli_query($koneksi_inv,"SELECT * FROM opname1  WHERE kodeitem between '$satuan1' AND '$satuan2'
ORDER BY kodeitem ")or die (mysqli_error($koneksi_inv));
while ($d1 = mysqli_fetch_array($sql1)) {
?>
<td><?php echo $d1[3];?></td>
<td><?php echo $d1[8];?></td>
<td><?php echo $d1[9];?></td>
<td><?php echo $d1[10];?></td>
</tr>
<?php }
$sql2=mysqli_query($koneksi_inv,"SELECT SUM(jmlselisih) as totalselisih FROM opname1  WHERE kodeitem between '$satuan1' AND '$satuan2'
ORDER BY kodeitem ")or die (mysqli_error($koneksi_inv));
while ($d2 = mysqli_fetch_array($sql2)) {
 ?>
<tr>
  <td colspan="6"></td>
  <td colspan="2">Total Selisih</td>
  <td><?php echo $d2['totalselisih']; ?></td>
</tr>
<?php }?>
	</tbody>
</table>

</body>
</html>
