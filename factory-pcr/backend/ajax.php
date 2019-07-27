<?php
include 'config/koneksi.php';
$data = mysqli_fetch_assoc(mysqli_query($koneksi_pcr,"SELECT * FROM apmst WHERE idsup = '$_GET[idsupp]'"));
$data1 = array('namasupp' =>$data['namasup'] );
json_encode($data1);
?>