<?php
include '../config/koneksi.php';
$z = $_GET['kodesup'];
$data = mysqli_fetch_assoc(mysqli_query($koneksi_pcr,"SELECT * FROM apmst WHERE kodesup = '$z'"));
$data1 = array(
	'namasup' => $data['namasup'],
	'alamat1' => $data['alamat1'],
	'alamat2' => $data['alamat2'],
	'kota' => $data['kota'],
	'telp' => $data['telp']
		);
echo json_encode($data1);
?>