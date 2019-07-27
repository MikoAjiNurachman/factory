<!DOCTYPE html>
<html>
<head>
	<title>Export Lap Expired</title>
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
	header("Content-Disposition: attachment; filename=Laporan_Inv_Bahan_Baku_$now.xls");
  #FOR RINCIAN AKHIR


  $company = mysqli_query($koneksi_utl, "SELECT * FROM profile");
  while($c = mysqli_fetch_array($company)){

   ?>
  	<center>
  		<b>Laporan Inventory Mutasi</b><br />
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
		<th>Saldo Awal</th>
		<th>Jml Saldo Awal</th>
		<th>Stock msk </th>
		<th>Stock keluar</th>
		<th>Qty akhir </th>
		<th>Sat </th>
		<th>HPP </th>
		<th>Po blm Suply </th>
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

$sql=mysqli_query($koneksi_inv,"SELECT * FROM ms_inmst1  WHERE kodeitem between '$satuan1' AND '$satuan2'
or namabrg  like '%".$namabrg1."%' AND '%".$namabrg2."%' ORDER BY kodeitem ")or die (mysqli_error($koneksi_inv));

while($d = mysqli_fetch_array($sql)){
$no++;
?>
<tr>
<td><?php echo $no; ?></td>
<td><?php echo $d[1];?></td>
<td><?php echo $d[2];?></td>
<td><?php echo $d[6];?></td>
<td><?php echo $d[7];?></td>
<td><?php echo $d[13];?></td>
<td><?php echo $d[14];?></td>
<td><?php echo $d[8];?></td>
<td><?php echo $d[9];?></td>
<td><?php echo $d[12];?></td>
<td><?php echo $d[15];?></td>



</tr>
		<?php } ?>
	</tbody>

	<tfoot>
	<tr>
		<th>No</th>
		<th>Kode Item</th>
		<th>Nama</th>
		<th>Saldo Awal</th>
		<th>Jml Saldo Awal</th>
		<th>Max Stock </th>
		<th>Qty </th>
		<th>Min Stock </th>
		<th>Sat </th>
		<th>HPP </th>
		<th>Po blm Suply </th>
	</tr>
	</tfoot>
</table>

</body>
</html>
