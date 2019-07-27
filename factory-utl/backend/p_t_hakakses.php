<?php
include '../config/koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];
$group = $_POST['group'];

$now = date("Y-m-d");

$password_md5=md5($password);

$cek = mysqli_num_rows(mysqli_query($koneksi_utl,"SELECT * FROM fct_akses WHERE username='$username'"));
if ($cek > 0){
echo "<script>window.alert(Username sudah digunakan silahkan untuk mengganti Username yang unik')
window.location='../_hak_akses.php'</script>";
}else {
$simpan ="insert into fct_akses VALUES('', '$username', '$password_md5', '', '', '$group', '$now')";
$simpan_ha = mysqli_query($koneksi_utl,$simpan) or die(mysqli_error($koneksi_utl));
if ($simpan_ha) {
	echo "
<script language=javascript type=text/javascript>
document.location='../_hak_akses.php'
</script>
	";
}
else{
	echo "
<script language=javascript type=text/javascript>
alert('Tambah Data Hak Akses gagal disimpan');
document.location='../_hak_akses.php'
</script>
	";
}
}
?>
