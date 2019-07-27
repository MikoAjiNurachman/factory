<?php
include 'koneksi.php';
$u = addslashes($_POST['username']);
$p = addslashes(md5($_POST['password']));
date_default_timezone_set('Asia/Jakarta');
  $jam = date("H:i:s");
  $tgl = date("Y-m-d");


$proses = mysqli_query($koneksi_utl,"SELECT * FROM fct_akses WHERE `username`='$u' AND `password`='$p'");
$bismillah = mysqli_num_rows($proses);
$alhamdulillah = mysqli_fetch_array($proses);

if ($bismillah>=1) {
	session_start();
	$_SESSION['username'] = $alhamdulillah['username'];
	$_SESSION['password'] = md5($alhamdulillah['password']);

  if ($_SESSION['username'] = $alhamdulillah['username']) {
      if ($alhamdulillah['group'] == "Inventory") {
  mysqli_query($koneksi_utl,"INSERT INTO log_session(username,
                                  tanggal,
                                  jamin,
                                  jamout,
                                  status)
                            VALUES('$_SESSION[username]',
                                 '$tgl',
                                 '$jam',
                                 'logged',
                                 'online')");
	echo"
			<script language=javascript>
			alert('Anda Berhasil Login sebagai Inventory');
			document.location='factory-inv/_ms_rack';
			</script>
		";
	}elseif ($alhamdulillah['group'] == "Admin") {
    mysqli_query($koneksi_utl,"INSERT INTO log_session(username,
                                    tanggal,
                                    jamin,
                                    jamout,
                                    status)
                              VALUES('$_SESSION[username]',
                                   '$tgl',
                                   '$jam',
                                   'logged',
                                   'online')");
    echo"
        <script language=javascript>
        alert('Anda Berhasil Login sebagai Admin');
        document.location='factory-utl/_dash_admin.php';
        </script>
      ";
  }elseif ($alhamdulillah['group'] == "Kasir") {
    mysqli_query($koneksi_utl,"INSERT INTO log_session(username,
                                    tanggal,
                                    jamin,
                                    jamout,
                                    status)
                              VALUES('$_SESSION[username]',
                                   '$tgl',
                                   '$jam',
                                   'logged',
                                   'online')");
    echo"
        <script language=javascript>
        alert('Anda Berhasil Login sebagai Kasir');
        document.location='#';
        </script>
      ";
  }elseif ($alhamdulillah['group'] == "Supplier") {
    mysqli_query($koneksi_utl,"INSERT INTO log_session(username,
                                    tanggal,
                                    jamin,
                                    jamout,
                                    status)
                              VALUES('$_SESSION[username]',
                                   '$tgl',
                                   '$jam',
                                   'logged',
                                   'online')");
    echo"
        <script language=javascript>
        alert('Anda Berhasil Login sebagai Supplier');
        document.location='factory-pcr/_ms_supplier.php';
        </script>
      ";
  }
}
}
else{
	echo"
			<script language=javascript>
alert ('Username atau Password anda mungkin salah, silahkan untuk login kembali'); window.history.go(-1);
			</script>
		";
}
